<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Table: portfolios_table
class Portfolio extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

}
