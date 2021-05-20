<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'spplr_id', 'pay_id', 'paymentMethod', 'itemsPrice', 'shippingPrice', 'taxPrice', 'totalPrice', 'isPaid', 'paidAt', 'isDelivered', 'deliveredAt'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function ship()
    // {
    //     return $this->hasMany(ShippingAddress::class);
    // }

    public function paymentResults()
    {
        return $this->belongsTo(paymentResults::class);
    }
}
