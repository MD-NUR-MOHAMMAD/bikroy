<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $guarded = [];

    /**
     * Get the order that owns the Shipping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the transport that owns the Shipping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transport(){
        return $this->hasOne(Transport::class);
    }
}
