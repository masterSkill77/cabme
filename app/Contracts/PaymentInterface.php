<?php

/**
 * Payment Interface
 *
 * @package     Gofer
 * @subpackage  Contracts
 * @category    Payment Interface
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
*/

namespace App\Contracts;

interface PaymentInterface
{
	function makePayment($payment_data,$nonce);
}