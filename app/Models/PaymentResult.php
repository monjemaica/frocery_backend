<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentResult extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'emailAddress'];

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
