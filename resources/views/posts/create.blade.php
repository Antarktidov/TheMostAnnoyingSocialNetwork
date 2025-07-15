@extends('layouts.app')

@section('content')
        <form class="form-control w-50" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <input class="form-control" type="file" name="filename">
            </div>
            <div class="mb-3">
            <button class="btn btn-primary" type="submit">Загрузить</button>
            </div>
        </form>
@endsection