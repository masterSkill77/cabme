<?php

/**
 * Applied Referrals Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    Applied Referrals
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppliedReferrals extends Model
{
    use CurrencyConversion;

    public $timestamps = true;

    public $convert_fields = ['amount'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','amount','currency_code'];    
}
