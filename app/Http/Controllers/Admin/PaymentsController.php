<?php

/**
 * Payments Controller
 *
 * @package     Cabme
 * @subpackage  Controller
 * @category    Payments
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\PaymentsDataTable;

class PaymentsController extends Controller
{
    /**
     * Load Datatable for Rating
     *
     * @param array $dataTable  Instance of PaymentsDataTable
     * @return datatable
     */
    public function index(PaymentsDataTable $dataTable)
    {
        return $dataTable->render('admin.payments.payments');
    }
}