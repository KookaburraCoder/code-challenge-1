<?php

namespace App\Http\Controllers;

use \App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('Name', 'asc')->get();
        $red = $orange = $green = 0;

        foreach ($customers as $customer) {
            $alpha      = $customer
                            ->orders()
                            ->whereRaw("OrderTotal >= 200 AND OrderStatus = 'Completed' AND created_at >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)")
                            ->get();
            $bravo      = $customer
                            ->orders()
                            ->whereRaw("created_at <= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)")
                            ->get();

            if ($customer->status->Code == 'AC' && count($alpha) > 0) {
                $green += 1;
                $customer['colour'] = 'green';
            } else if ($customer->status->Code == 'AC' && count($bravo) > 0) {
                $orange += 1;
                $customer['colour'] = 'orange';
            } else {
                $red += 1;
                $customer['colour'] = 'red';
            }
        }
        return view('customers.index', ['customers' => $customers, 'counts' => ['red' => $red, 'orange' => $orange, 'green' => $green]]);
    }
}
