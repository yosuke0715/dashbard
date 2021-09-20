<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JSController extends Controller
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
            $query = \DB::table('js');
            $query->where('user_id', $user_id);
            $btn_status = $query->first();
            return view('js_test', ['btn_status' => $btn_status]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
    public function saveBtnStatus($id){
        
        $user_id = Auth::user()->id;

        try {
            $target_js = 'js_'.$id;
            $is_status = \DB::table('js')->where('user_id', $user_id)->first()->$target_js;
            $query = \DB::table('js');
            $query->where('user_id', $user_id);
            if($is_status == 0){
                $query->update([
                    'js_'.$id => 10,
                    'js_'.$id.'_at' => now()
                ]);
            }elseif($is_status == 10){
                $query->update([
                    'js_'.$id => 0
                ]);
            }
            $js = \DB::table('js')->where('user_id', $user_id)->first();
            $sum = $js->js_1 + $js->js_2 + $js->js_3 + $js->js_4 + $js->js_5 + $js->js_6 + $js->js_7 + $js->js_8 + $js->js_9 + $js->js_10;
            $sum_query = \DB::table('progress')->where('user_id', $user_id)->update([
                'js' => $sum
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
