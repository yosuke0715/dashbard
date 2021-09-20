<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showDashboard()
    {
        $query = \DB::table('progress');
        $query->leftJoin('users', 'progress.user_id', '=', 'users.id');
        $getPercent = $query->get();
        return view('admin.home')
            ->with('items', $getPercent);
    }

    public function showOnlyInHouseUser(){
        $query = \DB::table('progress')->where('progress.copo_id', 101);
        $query->leftJoin('users', 'progress.user_id', '=', 'users.id');
        $getPercent = $query->get();
        return view('admin.home')
            ->with('items', $getPercent);
    }

    public function deleteTargetUser(Request $request){
        $targetId = $request->id;
        $query = \DB::table('users')->where('id', $targetId);
        $query->delete();
        $query = \DB::table('progress')->where('user_id', $targetId);
        $query->delete();
        return self::showDashboard();
    }
}
