@extends('layouts.app')
@section('content')
<div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1 ">{{ $user->name}} </h1>
                <p class="text-xl ">Posted {{$posts->count()}} {{ Str::plural('posts',$posts->count())}} and 
                Reicived {{ $user->receivedLikes->count() }} </p>
             </div>
        </div>


        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if($posts->count())
            @foreach($posts as $post)

            <x-post :post="$post" />

            @endforeach
            {{ $posts->links()}}

            @else
            <p> {{ $user->name}} Does't have any posts </p>
            @endif
        </div>
</div>



@endsection