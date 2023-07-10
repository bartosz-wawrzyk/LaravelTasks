<?php 

namespace App\Http\Controllers;

use App\Models\Customer;

class ClientController extends Controller
{
    public function getClientInfo($customerId)
    {
        $customer = Customer::with('employee', 'orders')->find($customerId);

        return response()->json($customer);
    }
}

?>