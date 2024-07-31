@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a><br>
    @empty
        <div>
            There is no task here!
        </div>
    @endforelse

@endsection
