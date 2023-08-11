@extends('layouts.app')
@section('content')
<div class="pt-20 w-1/3 m-auto">
    <form action="{{route('register')}}" method="POST" autocomplete="off">
    @csrf
        <h1 class="text-center text-xl bg-gray-200 px-3 py-4 font-bold rounded-tl-xl rounded-tr-xl border-b">
            Create account</h1>
        <div class="bg-white pt-3 pb-8">
        <div class="pt-4 mx-4">
            <label for="name" class="block text-lg text-left mb-2">
                Enter Name:
            </label>
            <input type="text" value="{{old('name')}}" name="name" class="w-full py-3 border-2 rounded-lg px-3 outline-none @error('name')
            border-red-500
            @enderror">
        </div>
        @error('name')
        <div class="text-red-600 my-2 text-base mx-4">{{$message}}</div>
        @enderror
        <div class="pt-4 mx-4">
            <label for="email" class="block text-lg text-left mb-2">
                Enter Email:
            </label>
            <input type="text" value="{{old('email')}}" name="email" class="w-full py-3 border-2 rounded-lg px-3 outline-none @error('email')
            border-red-500
            @enderror">
        </div>
        @error('email')
        <div class="text-red-600 my-2 text-base mx-4">{{$message}}</div>
        @enderror
        <div class="pt-4 mx-4">
            <label for="password" class="block text-lg text-left mb-2">
                Enter Password:
            </label>
            <input type="password" value="{{old('password')}}" name="password" class="w-full py-3 border-2 rounded-lg px-3 outline-none @error('password')
            border-red-500
            @enderror">
        </div>
        @error('password')
        <div class="text-red-600 my-2 text-base mx-4">{{$message}}</div>
        @enderror
        <div class="pt-4 mx-4">
            <label for="password_confirmation" class="block text-lg text-left mb-2">
                Confirm Password:
            </label>
            <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" class="w-full py-3 border-2 rounded-lg px-3 outline-none @error('password_confirmation')
            border-red-500
            @enderror">
        </div>
        @error('password_confirmation')
        <div class="text-red-600 my-2 text-base mx-4">{{$message}}</div>
        @enderror
        <div class="pt-4 mx-4">
            <input type="submit" value="Sign up" class="cursor-pointer w-full py-3 border-2 rounded-lg px-3 text-xl bg-blue-500 text-white hover:bg-blue-700">
        </div>
        </div>
    </form>
</div>
@endsection

