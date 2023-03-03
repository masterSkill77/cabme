<?php
/**
 * Language Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    TollReason
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripTollReason extends Model
{
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['trip_id','reason'];
    
}