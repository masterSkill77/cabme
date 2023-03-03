<?php

/**
 * SMS Interface
 *
 * @package     Cabme
 * @subpackage  Contracts
 * @category    SMS Interface
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
*/

namespace App\Contracts;

interface SMSInterface
{
	function initialize();
	function send($to,$text);
}