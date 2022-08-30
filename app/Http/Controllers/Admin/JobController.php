<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs=Job::all();
        return view('admin.job', compact('jobs','jobs'));
    }
    public function create()
    {
        return "create new job";
    }
    public function edit($id)
    {
        return "edit job with id -".$id;
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        return "delete job with id -".$id;
    }
    public function show($id)
    {
        //
    }
    public function store(Request $request)
    {

    }
}
