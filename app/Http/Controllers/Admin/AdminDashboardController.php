<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index(){
        $employees=Employees::paginate(5);
        return Inertia::render('Admin/Dashboard',['employee'=>$employees]);
    }
}
