<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
   protected $fillable=['name','order_id','mobile_number','amount','status','transaction_id'];
}
