@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="mt-14 py-14 text-center">
        <h1 class="text-5xl">{{$post->title}}</h1>
    </div>
</div>
<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{$post->description}}</div>
</div>
@endsection
