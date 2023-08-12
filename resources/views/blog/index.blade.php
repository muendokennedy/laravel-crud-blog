@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="mt-14 py-14 border-b border-gray-200">
        <h1 class="text-5xl">Blog Posts</h1>
    </div>
</div>
@auth
    <div class="pt-14 w-4/5 m-auto">
        <a href="/blog/create" class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Create Post</a>
    </div>
@endauth
@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
    <div>
        <img src="{{asset('/images/laptop.jpg')}}" width="700" alt="The laptop image">
    </div>
    <div>
        <h2 class="text-5xl text-gray-700 font-bold pb-4">{{$post->title}}</h2>
        <span class="text-gray-500">
            By <span class="text-gray-800 font-bold italic">{{$post->user->name}}</span>, created {{ $post->created_at->diffForHumans() }}
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
        <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-xl font-extrabold py-4 px-6 rounded-3xl">
            Keep Reading
        </a>
    </div>
</div>
@endforeach
@endsection
