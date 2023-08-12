@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="mt-14 py-14">
        <h1 class="text-5xl text-center border-b-2 pb-6 capitalize">Update the blog post</h1>
    </div>
</div>
<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" value="{{$post->title}}">
        @error('title')
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <textarea name="description"
        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{$post->description}}</textarea>
        @error('description')
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <button type="submit" class="uppercase mt-14 bg-blue-500 rounded-3xl text-gray-100 text-lg py-4 px-8 font-extrabold">Create post</button>
    </form>
</div>
@endsection
