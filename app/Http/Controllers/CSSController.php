<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CSSController extends Controller
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
            $query = \DB::table('css');
            $query->where('user_id', $user_id);
            $btn_status = $query->first();
            return view('css_test', ['btn_status' => $btn_status]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function saveBtnStatus($id){
        
        $user_id = Auth::user()->id;

        try {
            $target_css = 'css_'.$id;
            $is_status = \DB::table('css')->where('user_id', $user_id)->first()->$target_css;
            $query = \DB::table('css');
            $query->where('user_id', $user_id);
            if($is_status == 0){
                $query->update([
                    'css_'.$id => 10,
                    'css_'.$id.'_at' => now()
                ]);
            }elseif($is_status == 10){
                $query->update([
                    'css_'.$id => 0
                ]);
            }
            $css = \DB::table('css')->where('user_id', $user_id)->first();
            $sum = $css->css_1 + $css->css_2 + $css->css_3 + $css->css_4 + $css->css_5 + $css->css_6 + $css->css_7 + $css->css_8 + $css->css_9 + $css->css_10;
            $sum_query = \DB::table('progress')->where('user_id', $user_id)->update([
                'css' => $sum
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}