<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('view-task', function (User $user, Task $task) {
            if ($user->id === $task->user_id) {
                return true;
            }
            //return $user->id === $task->user_id and Arr::exists($task, $task->id);
        });

        Gate::define('task-exists', function ($data) {
            $task = Task::find($data->id);

            if (!$task) {
                return false;
            }
        });
    }
}
