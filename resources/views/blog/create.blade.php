@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="mt-14 py-14">
        <h1 class="text-5xl text-center border-b-2 pb-6 capitalize">Create a blog post</h1>
    </div>
</div>
<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" value="{{old('title')}}">
        @error('title')
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <textarea name="description" placeholder="Description..."
        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{old('description')}}</textarea>
        @error('description')
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <div class="pt-14">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue-500 cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="image" class="hidden" value="{{old('image')}}">
            </label>
        </div>
        @error('image')
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <button type="submit" class="uppercase mt-14 bg-blue-500 rounded-3xl text-gray-100 text-lg py-4 px-8 font-extrabold">Create post</button>
    </form>
</div>
@endsection
