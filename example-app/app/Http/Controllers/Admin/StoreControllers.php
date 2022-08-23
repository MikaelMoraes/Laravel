<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreControllers extends Controller
{
    public function index(){
        $stores = \App\Models\Store::paginate(10);
        return view('asmin.stoes.index', compact('stores'));
    }
    public function create(){
        $users = \App\Models\User::all(['id','name']);

        return view('admin.stores.crete');
    }
    public function stoe(Request $request){
        dd($request->all());
    }
}
