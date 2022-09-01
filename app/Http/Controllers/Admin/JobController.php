<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('admin.job', compact('jobs', 'jobs'));
    }

    public function create()
    {
        return view('admin.job_create');
    }

    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'title' => 'bail|required',
            'information' => 'required',
            'employment' => 'required',
            'responce' => 'required',
            'qualif' => 'required',
            'benef' => 'required',
            'salary' => 'nullable',
            'currency' => 'nullable',
            'location' => 'required',
            'status' => 'required',

        ]);
        $job = new Job;
        $job->title = $request->input('title');
        $job->employment = $request->input('employment');
        $job->location = $request->input('location');
        $job->deadline = $request->input('deadline');
        $job->information = $request->input('information');
        $job->responce = $request->input('responce');
        $job->qualif = $request->input('qualif');
        $job->benef = $request->input('benef');
        $job->salary = $request->input('salary');
        $job->company = $request->input('company');
        $job->currency = $request->input('currency');
        $job->status = $request->input('status');
        $job->save();

        return redirect()->back()->with('status', 'New job was created successfully!');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        //dd($job);
        return view('admin.job_edit', compact('job', 'job'));
//        return "edit job with id -".$id;
    }

    public function update(Request $request, $id)
    {

        $job=Job::find($id);
        $job->title=$request->input('title');
        $job->employment=$request->input('employment');
        $job->location=$request->input('location');
        $job->deadline=$request->input('deadline');
        $job->information=$request->input('information');
        $job->responce=$request->input('responce');
        $job->qualif=$request->input('qualif');
        $job->benef=$request->input('benef');
        $job->salary=$request->input('salary');
        $job->company=$request->input('company');
        $job->currency=$request->input('currency');
        $job->status=$request->input('status');
        $job->update();
        return redirect()->back()->with('status', 'Job updated successfully!');

    }

    public function destroy($id)
    {
        return "delete job with id -" . $id;
    }

    public function show($id)
    {
        //
    }

}
