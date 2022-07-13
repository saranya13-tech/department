<?php

namespace App\Http\Controllers;
use App\Author;
use App\OffenceMaster;
use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    return view('welcome');

    }

     public function get()
    {
        $users=DB::table('user')->join('department', 'department.id', '=', 'user.department_id')
                  ->join('designation', 'designation.id', '=', 'user.designation_id')
                  ->orWhere('user.name','like','%'. request()->input('name').'%')
                  ->orWhere('designation.name','like','%'. request()->input('name').'%')
                  ->orWhere('department.name','like','%'.  request()->input('name').'%')
                  ->select('user.name AS name','designation.name AS dname','department.name AS dename')
                  ->get();
    return json_encode($users);

    }
}