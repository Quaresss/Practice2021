@extends('layout')
@section('title')Новость@endsection
@section('main.content')
 
    <div class="btn-group mb-4" role="group" aria-label="Basic outlined example"> 
        @foreach ($categories as $category) 
        <a href="{{route('getPostsByCategory',$category->slug)}}"class="btn btn-primary">{{$category->title}} </a>
        @endforeach
    </div>   
 <div><a href="/news" class="btn btn-primary mb-4">Вернуться ко всем новостям</a></div>   
<div><a href="{{route('getPostsByCategory', $slug_category)}}" class="btn btn-primary mb-4">Вернуться к категории</a></div>

 
<div class="card mb-4">
    
 <div class="card-body">
    <h2>
        <article>
            {!!$post->text!!}  
        </article>
    </h2>    
 </div>
</div>

@endsection