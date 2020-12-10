@extends('layouts.app')


@section('content')
    <h1 class=display-1>Welcome to Online Notes</h1>
    <hr>
    <p class=fs-1>Simple CRUD app with <a href=https://laravel.com target=_blanc rel=noopener>Laravel 8</a> and <a href=https://getbootstrap.com target=_blanc rel=noopener>Bootstrap 5</a></p>
    <a href={{ route('notes.index') }} class="btn btn-primary btn-lg">Show All Notes</a>
@endsection