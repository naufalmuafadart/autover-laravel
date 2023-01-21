<?php

namespace App\Http\Controllers\View\Renter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        return view('page.renter.checkout');
    }
}
