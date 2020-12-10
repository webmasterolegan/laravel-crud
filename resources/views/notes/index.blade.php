@extends('layouts.app')


@section('title', 'All notes')


@section('content')
    <h1>All Notes</h1>
    <hr>

    <div class="d-grid gap-2  mb-2">
        <a href={{ route('notes.create') }} class="btn btn-primary">Create New Note</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(count($notes) > 0)
        <table class=table>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td><a href={{ route('notes.show', $note->id) }} class="btn btn-info">Show</a></td>
                        <th scope="row">{{ $note->title }}</th>
                        <td>{{ $note->created_at->diffForHumans() }}</td>
                        <td>{{ $note->updated_at->diffForHumans() }}</td>
                        <td><a href={{ route('notes.edit', $note->id) }} class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-primary">No notes.</div>
    @endif
@endsection