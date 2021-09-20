<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
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
            $query = \DB::table('todo_list');
            $query->where('user_id', $user_id);
            $items = $query->get();
            return view('todo_list', ['items' => $items]);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function addToDoList(Request $request){
        $request->session()->regenerateToken();
        $user_id = Auth::user()->id;

        try {
            $items = \DB::table('todo_list');
            $items->insert([
                'user_id'     => $user_id,
                'content'     => $request->content,
                'created_at' => now(),
                'updated_at'  => now()
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function delToDoList(Request $request){

        try {
            $query = \DB::table('todo_list');
            $query->where('id', $request->del_id);
            $query->delete();
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function editToDoList(Request $request){

        try {
            $query = \DB::table('todo_list');
            $query->where('id', $request->edit_id);
            $item = $query->first();
            return view('edit_todo')
                ->with('item', $item);
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }

    public function updateToDoList(Request $request){
        $this->init($request);
        
        try {
            $query = \DB::table('todo_list');
            $query->where('id', $request->id);
            $item = $query->update([
                'content'   => $request->content,
                'updated_at' => now()
            ]);
            return self::getViewData();
            
        } catch(Exception $ex) {
    
            $ex->getMessage();
            return;
        }
    }
}
