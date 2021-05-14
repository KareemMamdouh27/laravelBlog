@extends('layouts.app')
@section('title','Read more')

@section('content')
    <div class="w-4/5 m-auto text-left"> 
        <div class="py-15">
            <h1 class="text-6xl">
                {{$post->title}}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">
                {{$post->user->name}}
            </span>, Created On {{ date('JS M Y', strToTime($post->updated_at)) }}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{$post->description}}
        </p>
    </div>




@endsection