<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaravelController extends Controller
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

    public function getViewData(){

        $user_id = Auth::user()->id;

        try {
            $query = \DB::table('progress');
            $query->where('user_id', $user_id);
            $btn_status = $query->first()->laravel;
            return view('laravel_test', ['btn_status' => $btn_status]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function saveBtnStatus($id){
        
        $user_id = Auth::user()->id;

        try {
            $is_status = \DB::table('progress')->where('user_id', $user_id)->first()->laravel;
            $query = \DB::table('progress');
            $query->where('user_id', $user_id);
            if($is_status == 0){
                $query->update([
                    'laravel' => 10,
                    'laravel_at' => now()
                ]);
            }elseif($is_status == 10){
                $query->update([
                    'laravel' => 0
                ]);
            }
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
