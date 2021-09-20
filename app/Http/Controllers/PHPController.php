<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PHPController extends Controller
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
            $query = \DB::table('php');
            $query->where('user_id', $user_id);
            $btn_status = $query->first();
            return view('php_test', ['btn_status' => $btn_status]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function saveBtnStatus($id){
        
        $user_id = Auth::user()->id;

        try {
            $status = \DB::table('php')->where('user_id', $user_id)->first('php_'.$id);
            $target_php = 'php_'.$id;
            $is_status = $status->$target_php;
            $query = \DB::table('php');
            $query->where('user_id', $user_id);
            if($is_status == 0){
                $query->update([
                    'php_'.$id  => 10,
                    'php_'.$id.'_at' => now()
                ]);
            }elseif($is_status == 10){
                $query->update([
                    'php_'.$id => 0
                ]);
            }
            $php = \DB::table('php')->where('user_id', $user_id)->first();
            $sum = $php->php_1 + $php->php_2 + $php->php_3 + $php->php_4 + $php->php_5 + $php->php_6 + $php->php_7 + $php->php_8 + $php->php_9 + $php->php_10;
            $sum_query = \DB::table('progress')->where('user_id', $user_id)->update([
                'php' => $sum
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
