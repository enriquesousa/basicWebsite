<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    // ***** User Logout *** //
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // ***** Admin Login con verification con email *** //
    public function AdminLogin(Request $request){

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            $verificationCode = random_int(100000,999999);
            session(['verification_code' => $verificationCode, 'user_id' => $user->id ]);
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            Auth::logout();
            return redirect()->route('custom.verification.form')->with('status',__('Verification code send to your mail'));
        }

        return redirect()->back()->withErrors(['email' => __('Invalid Credentials Provided')]); 
    }

    public function ShowVerification(){
        return view('auth.verify');
    }

    public function VerificationVerify(Request $request){

        $request->validate(['code' => 'required|numeric']);

        if ($request->code == session('verification_code')) {
            Auth::loginUsingId(session('user_id'));

            session()->forget(['verification_code','user_id']);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['code' => __('Invalid Verification Code')]);
    }

    // ***** Admin Profile *** //
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile', compact('profileData'));
    }

    public function ProfileStore(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);

        // dd($request->all());

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images'), $filename);
            $data->photo = $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();

        $notification = array(
            'message' => __('Profile Updated Successfully'),
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/user_images/' . $oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }


}
