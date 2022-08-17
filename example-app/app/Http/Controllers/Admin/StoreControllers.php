<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreControllers extends Controller
{
    public function index(){
        $stores = \App\Models\Store::all();
        return $stores;
    }
}
