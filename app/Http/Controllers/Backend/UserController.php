<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'list user';
    }
    public function create(){
        return view('CreateUser');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
