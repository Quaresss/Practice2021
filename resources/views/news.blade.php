@extends('layout')
@section('title')Новости@endsection
@section('main.content')
<div class="container">
 
    <div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
        @foreach ($categories as $category) 
        <a href="{{route('getPostsByCategory',$category->slug)}}" class="btn btn-primary">{{$category->title}}</a>
        @endforeach
    </div>
    @foreach ($posts as $post)   
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('getPostsByCategory',$post->category['slug'])}}">{{$post->category['title']}}</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <a href="{{route('getPost', [$post->category['slug'],$post->slug])}}" class="btn btn-primary">Читать далее</a>
        </div>
    </div>
    @endforeach
    

    {{$posts->links('vendor.pagination.bootstrap-4')}}

    
</div>
@endsection

