<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdeItems extends Model
{
    protected $guarded = [];

    /**
     * Get the order that owns the OrdeItems
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the product that owns the OrdeItems
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
