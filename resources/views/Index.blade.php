<h1>This is list of tasks</h1>

@forelse($tasks as $task)
    <div>
        <a href="{{route('task.show', ['id' => $task -> id])}}">{{$task->title}}</a>
    </div>
@empty
    <div>
        There is no tasks here.
    </div>
@endforelse
