@extends('layouts.layout')

@section('content')

<style>
    .news-content{
        padding: 1rem;
        margin: 0.5rem;
        background-color: #212938;
    }
</style>

    <div id="posts">
        @foreach ($news as $new) 
            <div class="news-content">
                <div class="row">
                    <div class="col-md-4">
                        @foreach ($newsUser as $newUser)
                            @if ($newUser->news_id == $new->id)
                                @foreach ($authors as $author)
                                    @if ($author->id == $newUser->user_id)
                                        <p><a href="{{ url('/author') }}/{{$author->id}}">{{$author->name}}</a></p>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>

                    <div class="col-md-8">
                        <div class="news-title">
                            <a href="{{ url('/article') }}/{{$new->id}}" class="text-sm text-gray-700 underline">{{$new->title }}</a> 
                        </div>
                        <div class="news-text">
                            <p class="text-sm text-gray-700">{{$new->text}}</p> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection