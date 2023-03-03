<?php

/**
 * Fees Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    Fees
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fees';

    public $timestamps = false;
}