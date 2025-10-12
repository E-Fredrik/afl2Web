<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index() {
        $testimonies = new Testimony();
        $testimonies = $testimonies->getTestimonies();
        return view('home', ['testimonies' => $testimonies]);
    }
}
