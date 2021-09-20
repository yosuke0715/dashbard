<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
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

    public function getViewData($user_id = 1){

        try {
            $query = \DB::table('progress')->where('progress.user_id', $user_id);
            $query->leftJoin('css', 'progress.user_id', '=', 'css.user_id');
            $query->leftJoin('js', 'progress.user_id', '=', 'js.user_id');
            $query->leftJoin('php', 'progress.user_id', '=', 'php.user_id');
            $item = $query->first();
            
            $users = \DB::table('progress')->get();
    
            return view('admin.progress')
                    ->with('item', $item)
                    ->with('users', $users);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function getViewUserData(Request $request){

        $user_id = $request->select_user_name;

        return self::getViewData($user_id);

    }
}
