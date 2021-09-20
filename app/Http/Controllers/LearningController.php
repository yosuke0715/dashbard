<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
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
            $query = \DB::table('learning');
            $query->where('user_id', $user_id);
            $items = $query->get();
            return view('learning', ['items' => $items]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function addLearning(Request $request){
        $request->session()->regenerateToken();
        $user_id = Auth::user()->id;

        try {
            $items = \DB::table('learning');
            $items->insert([
                'user_id'     => $user_id,
                'content'     => $request->learning,
                'created_at' => now(),
                'updated_at'  => now()
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function delLearning(Request $request){

        try {
            $query = \DB::table('learning');
            $query->where('id', $request->del_id);
            $query->delete();
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function editLearning(Request $request){

        try {
            $query = \DB::table('learning');
            $query->where('id', $request->edit_id);
            $item = $query->first();
            return view('edit_learning')
                ->with('item', $item);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function updateLearning(Request $request){
        
        try {
            $query = \DB::table('learning');
            $query->where('id', $request->id);
            $item = $query->update([
                'content'   => $request->learning,
                'updated_at' => now()
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
