<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LearningController extends Controller
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

    public function getViewData($user_id = NULL, $inHouse_user = NULL){

        try {
            if(is_null($user_id)){
                $query = \DB::table('learning');
            }else{
                $query = \DB::table('learning')->where('learning.user_id', $user_id);

            }
            $query->leftJoin('progress', 'learning.user_id', '=', 'progress.user_id');
            if(is_null($inHouse_user)){
                $items = $query->get();
            }else{
                $items = $query->get()->where('copo_id', 101);
            }
            
            $users = \DB::table('progress')->get();

            return view('admin.learning')
                    ->with('items', $items)
                    ->with('users', $users);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function getViewUserData(Request $request){

        try {
            $user_id = $request->select_user_name;
            return self::getViewData($user_id, NULL);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function getViewAllUserData(){
        try {
            $inHouse_user = "NOT_NULL";
            return self::getViewData(NULL, $inHouse_user);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
