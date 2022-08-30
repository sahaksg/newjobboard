<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        $applicants=Applicant::all();
        return view('admin.applicant', compact('applicants','applicants'));
    }
}
