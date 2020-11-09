<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
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
    protected $primaryKey = 'CustomerId';
    
    /**
     * Get the customer status associated with the customer.
     */
    public function status()
    {
        return $this->hasOne('App\Models\CustomerStatus', 'CustomerStatusId');
    }

    /**
     * Get the orders for the customer.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'CustomerID');
    }

}
