@extends('layouts.app')


@section('title')
    Note: {{ $note->title ?? 'without title' }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Note
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $note->title ?? '' }}</h5>
            <p class="card-text">{{ $note->body ?? '' }}</p>
            <p class="card-text"><small class="text-muted">Created {{ $note->created_at->diffForHumans() }}. Last updated {{ $note->updated_at->diffForHumans() }}</small></p>
            <a href={{ route('notes.edit', $note->id) }} class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection