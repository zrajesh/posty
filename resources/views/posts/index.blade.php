@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{route('posts')}}" method="POST" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">
                    Body
                    </label>
                    <textarea 
                     name="body" id="body" cols="30" rows="4"
                     class="border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                     placeholder="Say Something!"
                    >
                    </textarea>
                    @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white font-medium px-4 py-2 rounded">
                Post
                </button>
            </form>
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href="#" class="font-bold">
                        {{$post->user->name}}
                        </a>
                        <span class="text-sm text-gray-500">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mb-2">{{$post->body}}</p>
                    </div>
                @endforeach
                {{$posts->links()}}          
            @else
                <p>There are no posts available</p>
            @endif
        </div>
    </div>
@endsection
