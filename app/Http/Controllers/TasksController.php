<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Input;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = auth()->id();
        $tasks = Task::all()->where('user_id',$user_id);
        //or
        // $tasks = Task::where('user_id',$user_id)->get();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newTask()
    {
        //
        return view('tasks.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Task $task)
    {

        $this->validate($request,[
            'title'=>'required',

        ]);

            $task = new Task;
            $task->user_id = auth()->id();
            $task->title = request('title');
            $task->description = trim(request('description')) !== '' ? request('decription') : null;
            $task->complete = request('completed');
            $task->save();
            return redirect('/tasks');


    }

    public function update(Task $task)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task, Request $request)
    {
        $this->validate($request,[
            'title'=>'required'
        ]);
        //
        $task->title = request('title');
        $task->description = trim(request('description')) !== '' ? request('decription') : null;
        $task->complete = request('completed');
        $task->update();
        return redirect('/tasks');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Task $task)
    {
        //
        $task->delete();

        // redirect
        return redirect('/tasks');
    }

    public function showOnly($show){
        $user_id = auth()->id();
        if ($show=='incomplete'){
          $tasks = Task::all()->where('user_id',$user_id)->where('complete',0);
        //or
        }
        elseif($show=='complete'){
            $tasks = Task::all()->where('user_id',$user_id)->where('complete',1);
        }elseif($show=='bydateUp'){
            $tasks = Task::orderBy('created_at', 'asc')->where('user_id',$user_id)->get();
        }elseif($show=='bydateDown'){
            $tasks = Task::orderBy('created_at', 'desc')->where('user_id',$user_id)->get();
        }
        // $tasks = Task::where('user_id',$user_id)->get();
        return view('tasks.index', compact('tasks'));

    }
    public function sort(){
        $mode = request()->get('sortBy');
        $user_id = auth()->id();
        $tasks = Task::orderBy('created_at', $mode)->where('user_id',$user_id)->get();
        return view('tasks.index', compact('tasks'));
        //return redirect('/tasks/show/bydateUp/');
    }
}
