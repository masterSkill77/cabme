<?php

/**
 * Trip Controller
 *
 * @package     Cabme
 * @subpackage  Controller
 * @category    KonikPayment
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CgrateService;
use Illuminate\Http\Request;

class CgratePaymentController extends Controller
{
    public $cgrateService;
    public function __construct()
    {
        $this->cgrateService = new CgrateService();
        \Log::error('Cgrate start');
    }
    public function getAccountBalance()
    {
        $result = $this->cgrateService->getAccountBalance();
        return response()->json($result);
    }

    public function processPayment(Request $request)
    {
        $amount = $request->input('amount');
        $phone_number = $request->input('phone_number');

        $result = $this->cgrateService->processPayment($amount, $phone_number);

        return response()->json($result);
    }
    public function processCashout(Request $request)
    {
        $cashoutCode = $request->input('cashout_code');
        $cashierId = $request->input('cashier_id');
        $phone_number = $request->input('phone_number');
        $result = $this->cgrateService->processCashout($phone_number, $cashoutCode, $cashierId);

        return response()->json($result);
    }
}
