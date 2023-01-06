<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['user_id', 'product_id', 'product_type', 'amount', 'payment_id', ];

    public function product()
    {
        return $this->morphTo();
    }
}
