@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="mt-14 py-14 border-b border-gray-200">
        <h1 class="text-5xl">Blog Posts</h1>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
    <div>
        <img src="{{asset('/images/laptop.jpg')}}" width="700" alt="The laptop image">
    </div>
    <div>
        <h2 class="text-5xl text-gray-700 font-bold pb-4">Learn how to write Laravel code</h2>
        <span class="text-gray-500">
            By <span class="text-gray-800 font-bold italic">Kennedy Munyao</span>, 1 day ago
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam iste consequatur natus tempora et debitis eum adipisci omnis cupiditate! Obcaecati nulla nemo cupiditate aliquam odio.
        </p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-xl font-extrabold py-4 px-6 rounded-3xl">
            Keep Reading
        </a>
    </div>
</div>
@endsection
