<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'user_id', 'customer_id', 'products', 'total'];

    public function customer(){

        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
