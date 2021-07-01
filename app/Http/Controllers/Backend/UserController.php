<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'list user';
    }
    public function showid($id){
        return 'user id : '.$id;
    }
    public function create(){
        return view('CreateUser');
    }
    public function store(Request $request){
        echo $request->fullname;
        if ($request->has('fullname')) echo '<br> co ten';
        if ($request->has('age')) echo ' co tuoi' ;
    }
    public function getURL(Request $request){
         if ($request->isMethod('get')) echo 'true' ;
    }
}
