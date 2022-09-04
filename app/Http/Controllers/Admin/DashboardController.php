<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){
//        $data=DB::select("SELECT
//    COUNT(*),
//    `applicants.job_id`,
//    `applicants.job_title`,
//    `applicants.name`,
//    `jobs.views`
//FROM
//    `applicants`
//INNER JOIN `jobs` WHERE `applicants.job_id` = `jobs.id`
//GROUP BY
//    `job_title`
//HAVING
//    COUNT(*) > 1;");
//        $data=DB::table('applicants')->
//        join('jobs','applicants.job_id', '=','jobs.id')->
//        select('applicants.job_id','applicants.job_title','applicants.name','jobs.views')
//           ->groupByRaw('job_title') ->get();
        //working one table

//        $data=DB::table('applicants')->
//            select('job_title', (DB::raw('COUNT(job_title)')))->
//            groupBy('job_title')->having(DB::raw('COUNT(job_title)'),'>',1)->get();
        $count='COUNT(applicants.job_title)';
        $datas=DB::table('applicants')->join('jobs','applicants.job_id','=','jobs.id')->
        select('applicants.job_title', (DB::raw('COUNT(applicants.job_title) as applications')), 'jobs.views'  )->
        groupBy('applicants.job_title')->having(DB::raw($count),'>=',1)->get();
//        dd($datas);
        return view('admin.dashboard', compact('datas','datas'));
    }
}
