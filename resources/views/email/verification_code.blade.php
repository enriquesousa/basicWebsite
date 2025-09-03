<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Verification Code Page') }}</title>
</head>
<body>
    <p>{{ __('Hello') }},</p>
    <p>{{ __('Your Login Verification code is') }} : <strong>{{ $code }} </strong> </p>
    <p>{{ __('Please enter this code to complete your login') }}</p>
</body>
</html>