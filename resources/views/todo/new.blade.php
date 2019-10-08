@extends('base')

@section('body')
    <form action="{{ route('todoCreate') }}" method="post">
        @csrf
        <div>
            <label>Deskripsi </label>
            <input type="text" name="description">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection