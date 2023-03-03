<?php

/**
 * Metas Model
 *
 * @package     Cabme
 * @subpackage  Model
 * @category    Metas
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'metas';

    public $timestamps = false;
}
