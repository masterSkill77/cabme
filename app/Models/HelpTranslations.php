<?php

/**
 * Help Translations Model
 *
 * @package     Cabme
 * @subpackage  Controller
 * @category    Help Translations
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpTranslations extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
    
    public function language() {
    	return $this->belongsTo('App\Models\Language','locale','value');
    }
}
