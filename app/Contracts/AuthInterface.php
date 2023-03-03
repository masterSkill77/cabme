<?php

/**
 * Auth Interface
 *
 * @package     Gofer
 * @subpackage  Contracts
 * @category    Auth Interface
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
*/

namespace App\Contracts;

use Illuminate\Http\Request;

interface AuthInterface
{
	public function create(Request $request);
	public function login($credentials);
}