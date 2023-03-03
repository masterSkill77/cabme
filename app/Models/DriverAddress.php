<?php

/**
 * Driver Address Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    Driver Address
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverAddress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'driver_address';

    public $timestamps = false;
}