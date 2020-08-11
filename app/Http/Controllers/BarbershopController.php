<?php

namespace App\Http\Controllers;

use App\BarberShop;
use Illuminate\Http\Request;

class BarbershopController extends Controller
{
    public function allData()
    {
        
        return view('barbershops', ['data' => Barbershop::all()]);
    }
}
