@extends('main')
@section('content')
    <h3>show article</h3>
    <h5>title:</h5>
    {{$article->title}}
    <h5>text:</h5>
    {{$article->text}}
@endsection