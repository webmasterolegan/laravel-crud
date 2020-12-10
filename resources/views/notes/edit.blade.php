@extends('layouts.app')


@section('title', 'Editing note')


@section('content')
    <h1><small class=text-secondary>Editing note:</small> {{ $note->title ?? '' }}</h1>
    <hr>
    <form method=POST action={{ route('notes.update', $note->id) }}>
        @csrf
        @method('PUT')

        <div class=mb-3>
            <label for=exampleInputTitle class=form-label>Title:</label>
            <input type=text class="form-control form-control-lg @error('title') is-invalid @enderror" id=exampleInputTitle aria-describedby=titleHelp name=title value="{{ $note->title }}" required placeholder="Input Note Title">
            <div id=titleHelp class=form-text>The name of the note, displayed in the list.</div>
            
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=mb-3>
            <label for=exampleFormControlBody class=form-label aria-describedby=bodyHelp>Body:</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id=exampleFormControlBody rows=3 name=body required placeholder="Input Note Text Body">{{ $note->body }}</textarea>
            <div id=bodyHelp class=form-text>Main content of the note.</div>

            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        <button type=submit class="btn btn-success">Update</button>
    </form>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Сonfirm deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you really want to delete the note?
            </div>
            <form class="modal-footer" method=POST action={{ route('notes.destroy', $note->id) }}>
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger">Destroy</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <form>
            </div>
        </div>
    </div>
@endsection