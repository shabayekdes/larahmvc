<?php

namespace Customer\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Customer controller
 */
class CustomerController extends Controller
{
    public function index()
    {
        dd('Customers Controller!!', config('menu.customer'));
    }

}
