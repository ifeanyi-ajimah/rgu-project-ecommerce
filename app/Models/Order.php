<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','item_count','sum_cost_for_item',
                            'user_id','item_unit_cost','fulfilment_date','delivery_fee',
                        'status'];



}
