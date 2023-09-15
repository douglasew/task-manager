<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    //
    public function index()
    {
        //
        $data = Task::where('user_id', auth()->id())->paginate(8);

        foreach ($data as $task) {
            $task->title = Str::of($task->title)->limit(20);
            $task->description = Str::of($task->description)->limit(20);
            //$task->finish_date = Carbon::createFromFormat('Y-m-d', $task->finish_date)->locale('pt_BR');
            $task->finish_date = Carbon::createFromFormat('Y-m-d', $task->finish_date)
                ->locale('pt_BR')
                ->isoFormat('D [de] MMMM [de] Y');

            if ($task->status == 1) {
                $task->status = 'Ativa';
            } else {
                $task->status = 'Finalizada';
            }
        }

        return view('dashboard', [
            'tasks' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('task.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        //
        $request->validated();
        $date_formatted = date('Y-m-d H:i:s', strtotime($request->finish_date));

        //dd(Carbon::parse($request->finish_date)->timestamp;);
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'finish_date' => $request->finish_date,
            'user_id' => auth()->id()
        ]);

        return back()->with('task-created', 'Atividade Criada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //
        $data = Task::find($id);

        if (empty($data)) {
            Gate::authorize('task-exists', $data);
        }

        Gate::authorize('view-task', $data);

        return view('task.edit', [
            'task' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskUpdateRequest $request, string $id)
    {
        //
        Task::find($id)->fill($request->validated())->save();

        return back()->with('task-updated', 'Atividade Atualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
        $task = Task::find($id);
        $task->delete();

        return Redirect::to('dashboard')->with('task-deleted', 'Atividade Deletada');
    }
}
