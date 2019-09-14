<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        /* de esta forma queda la ruta online y sirve como API 
   $tasks = DB::table('tasks')->get();
    return $tasks;*/

        /* Una forma de hacerlo
    $tasks = DB::table('tasks')->get();
    */
        //mejor forma de hacerlo
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        /* una forma de hacerlo
        $task = DB::table('tasks')->find($id);
        //dd($task);*/


        //otra forma de hacerlo
        //$task = Task::find($id);

        //mejor forma de hacerlo
        //Task $task wildcard Task::find automatico

        //return $task;
        
        return view('tasks.show', compact('task'));
    }
}
