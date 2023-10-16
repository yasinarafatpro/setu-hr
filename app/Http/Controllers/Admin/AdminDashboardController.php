<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchOffice;
use App\Models\Employees;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $time = now()->toTimeString();
        $employees = Employees::paginate(5);
        $branchOffice = BranchOffice::paginate(5);
        return Inertia::render('Admin/Dashboard', ['employee' => $employees, 'branch-office' => $branchOffice,'time'=>$time]);
    }
}
