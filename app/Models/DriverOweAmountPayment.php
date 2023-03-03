<?php

/**
 * DriverOweAmountPayment Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    DriverOweAmountPayment
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverOweAmountPayment extends Model
{
    use CurrencyConversion;
    
    protected $fillable = ['user_id','transaction_id','amount','currency_code','status'];

    protected $convert_fields = ['amount'];

    public $timestamps = false;

    /**
     * get formatted Amount Value
     *
     */
    public function getAmountAttribute()
    {
        return number_format(($this->attributes['amount']),2,'.',''); 
    }

    /**
     * Join With User table
     *
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
