<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Job;
use Illuminate\Http\Request;

class PagesController extends Controller
{
//    home page text
    public function index(){
        $result=Home::all();
        return view('pages.index',compact('result'));
    }
//    jobs page to display all jobs
    public function jobs($pag){
        $page=$pag;
        $kol=3;
        $art=($page*$kol)-$kol;
        $sql1=Job::all()->skip($art)->take($kol);
        $sql2=Job::all()->count();
        $str_pag=ceil($sql2/$kol);
//        dd($str_pag);

        return view('pages.jobs', compact('sql1','str_pag'));
    }
//    not used currently
    public function details(){
        return view('pages.details');
    }
//    details of the job by its id property
    public function details_with_id($id){
        $result=Job::find($id);
        return view('pages.details',compact('result'));
    }
}
