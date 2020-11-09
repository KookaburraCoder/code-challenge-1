<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'CustomerStatusId';

    /**
     * Get the customer that owns the orders.
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'CustomerId');
    }
}
