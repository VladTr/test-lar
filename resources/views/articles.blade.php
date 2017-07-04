@extends('main')
@section('content')
    <h3>Articles</h3>
    <ul>
        @foreach($articles as $article)
            <li><a href={{url('articles/'.$article->id)}}>{{$article->title}}</a>
                <a href={{url('articles/'.$article->id.'/edit')}}>edit</a>
                <a href={{url('articles/'.$article->id.'/delete')}}>delete</a>
            </li>
        @endforeach
    </ul>
@endsection