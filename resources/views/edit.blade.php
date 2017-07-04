@extends('main')
@section('content')
    <h3>edit article</h3>
    <form method="post" action={{url('articles/'.$article->id.'/edit')}}>
        {!! csrf_field() !!}
        <div>
            <label for="title">title</label>
            <input value='{{$article->title}}' type="text" id="title" name="title">
        </div>
        <div>
            <label for="text">text</label>
            <input value='{{$article->text}}' type="text" id="text" name="text">
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
@endsection