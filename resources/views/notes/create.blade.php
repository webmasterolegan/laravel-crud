@extends('layouts.app')


@section('title', 'Creating new note')


@section('content')
    <h1>New Note</h1>
    <hr>
    <form method=POST action={{ route('notes.store') }}>
        @csrf
        <div class=mb-3>
            <label for=exampleInputTitle class=form-label>Title:</label>
            <input type=text class="form-control form-control-lg @error('title') is-invalid @enderror" id=exampleInputTitle aria-describedby=titleHelp name=title value="{{ old('title') }}" required placeholder="Input Note Title">
            <div id=titleHelp class=form-text>The name of the note, displayed in the list.</div>
            
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=mb-3>
            <label for=exampleFormControlBody class=form-label aria-describedby=bodyHelp>Body:</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id=exampleFormControlBody rows=3 name=body required placeholder="Input Note Text Body">{{ old('body') }}</textarea>
            <div id=bodyHelp class=form-text>Main content of the note.</div>

            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type=submit class="btn btn-success">Store</button>
    </form>
@endsection