<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth()->user()->id;
        $tasks = task::query()->where('user_id', $user_id)->paginate(5);
        return view('tms.admin.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tms.admin.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $task = new task;
        $request->validate([
            'title' => 'string|max:100|min:1|required',
            'description' => 'required',
            'user_id' => 'required'
        ]);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user_id = $request->user_id;
        $task->save();
        return redirect('/admin/task')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = task::query()->where('id', $id)->get()->first();
        return view('tms.admin.task.view', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return view('tms.admin.task.edit');
        $task = task::query()->where('id', $id)->get()->first();
        return view('tms.admin.task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = new task;
        $task = $task->where('id', $id)->get()->first();
        $request->validate([
            'title' => 'string|max:100|min:1|required',
            'description' => 'required',
            'user_id' => 'required'
        ]);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->update();
        return redirect('/admin/task')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = task::query()->where('id', $id)->get()->first();
        $task->delete();
        return redirect('admin/task')->with('message', 'Deleted Successfully');
    }
}
