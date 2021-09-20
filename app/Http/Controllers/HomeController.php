<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showDashboard()
    {
        $user_id = Auth::id();
        $getPercent = \DB::table('progress')->where('user_id', $user_id)->first();
        $percent_array = array(
            'css'     => $getPercent->css,
            'js'      => $getPercent->js,
            'jquery'  => $getPercent->jquery,
            'php'     => $getPercent->php,
            'laravel' => $getPercent->laravel
        );
        $total_percent = round(array_sum($percent_array) / 320 * 100, 1);
        $todo_count = \DB::table('todo_list')->where('user_id', $user_id)->count();
        $learning_count = \DB::table('learning')->where('user_id', $user_id)->count();
        if($learning_count>=1){
            $percent_array['learning_time'] = \DB::table('learning')->where('user_id', $user_id)->orderBy('updated_at','desc')->first()->updated_at;
        }
        return view('home')
        ->with("percent_array", $percent_array) 
        ->with("total_percent", $total_percent)
        ->with('todo_count', $todo_count)
        ->with('learning_count', $learning_count);
    }


}
