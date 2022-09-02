<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('admin.job', [
            'jobs' => DB::table('jobs')->paginate(4)
        ]);
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
//        dd($id);
        $job=Job::find($id);
        $job->delete();
        return redirect()->back();

    }

    public function show($id)
    {
        //
    }
    public function search(Request $request)
    {
        $title=$request->title;
//        dd($title);

        $jobs = Job::query()->where('title', 'LIKE', '%'.$title.'%')->get();
//        dd($jobs);

        return view('admin.search', compact('jobs','jobs'));
    }

}
