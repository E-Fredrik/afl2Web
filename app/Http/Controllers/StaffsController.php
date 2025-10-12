<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffsController extends Controller
{
    public function index() {
        $staffModel = new Staff();
        $staffs = $staffModel->getStaffs();
        return view('aboutUs', ['staffs' => $staffs]);
    }
}
