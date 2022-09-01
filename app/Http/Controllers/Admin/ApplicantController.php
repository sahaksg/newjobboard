<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    public function index(){
        $applicants=Applicant::all();
        return view('admin.applicant', ['applicants' => DB::table('applicants')->paginate(4)]);
    }
}
