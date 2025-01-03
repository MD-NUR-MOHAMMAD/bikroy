<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    /**
     * Get the user that owns the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the orderItems for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems(){
        return $this->hasMany(OrderItems::class);
    }

    /**
     * Get the shipping information for the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function shipping(){
        return $this->hasOne(Shipping::class);
    }
}
