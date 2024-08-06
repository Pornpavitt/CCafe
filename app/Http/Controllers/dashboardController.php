<?php

namespace App\Http\Controllers;

use App\Models\bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    function index(){
        // $role=Auth::user()->role;
        // if($role=='1'){
        //     $bill=bill::where('status',"=",'finished');
        //     return view('admin.Dashboard',compact('bill'));
        // }
        // else{
        //     return view('Dashboard');
        // }
    }
}
