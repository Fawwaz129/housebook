<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TaskRequest;
use App\Models\task;
use App\Models\Userrole;

/**
 * Summary of TaskController
 */
class TaskController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        //$this->middleware('is_admin');
    }
    public function index(Request $request) {
        if ($request -> search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = Task::paginate();
        return view('task.index', [
            'data' => $task
        ]);
        
    }

    public function product(Request $request) {
        if ($request -> search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = Task::paginate();
        return view('task.product', [
            'data' => $task
        ]);
        
    }
    public function userrole(Request $request) {
        if ($request -> search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")
            ->get();

            return $task;
        }
        $task = Task::paginate();
        return view('task.userrole', [
            'data' => $task
        ]);
        
    }


    public function create(){
        return view('task.create');
    }
    public function store(TaskRequest $request){
        Task::create([
            'book_name' => $request->book_name,
            'rate_book' => $request->rate_book,
            'pengarang_book' => $request->pengarang_book,
            'synopsis' => $request->synopsis,
        ]);
        // return 'Success';
        return redirect('/tasks');
    }
    public function delete($id) {
        $task = Task::find($id)
        ->delete();
        return redirect('/tasks');
    }

    public function update(TaskRequest $request, $id){
        $task = Task::find($id);
        $task->update([
            'book_name' => $request->book_name,
            'rate_book' => $request->rate_book,
            'pengarang_book' => $request->pengarang_book,
            'synopsis' => $request->synopsis,

            

        ]);
        return redirect('/tasks');
    }
    public function edit($id){
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }
}

