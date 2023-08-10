@extends('layouts.app')
@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read More</a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
    <div>
        <img src="{{asset('/images/laptop.jpg')}}" width="700" alt="The laptop image">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>
        <p class="py-8 text-gray-500 text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, culpa.
        </p>
        <p class="font-extrabold text-gray-600 text-sm pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, voluptate error ducimus iusto quasi ex obcaecati explicabo quaerat facilis dicta.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>
<div class="text-center p-14 text-white bg-black">
    <h2 class="text-2xl pb-5">I am an expert...</h2>
    <span class="font-extrabold block text-4xl py-1">UI Design</span>
    <span class="font-extrabold block text-4xl py-1">Project Management</span>
    <span class="font-extrabold block text-4xl py-1">Digital Strategy</span>
    <span class="font-extrabold block text-4xl py-1">Backend Development</span>
</div>
<div class="text-center py-14">
    <span class="uppercase text-sm text-gray-400">Blog</span>
    <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dignissimos quasi architecto, voluptas dolorum sunt. Consequuntur similique voluptas nam obcaecati.</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">php</span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt vero nesciunt iusto numquam consequatur, animi quam perspiciatis quisquam vitae ipsam?
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find out more</a>
        </div>
    </div>
    <div>
        <img src="{{asset('/images/laptop.jpg')}}" width="700" alt="The laptop image">
    </div>
</div>
@endsection
