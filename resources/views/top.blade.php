@extends('layouts.layout')

@section('content')

<style>
    .user-content{
        background-color: #212938;
        padding: 1rem;
        margin: 0.5rem;
    }

    .user-profile img{
        width: 30%;
        height: 3rem;
    }

    #posts .row{
        text-align: center;
    }
</style>

<div id="posts">
    <div class="row">
        @foreach ($users as $user)

            @foreach ($user_id as $item)
                @if ($item->user_id == $user->id)
                    <div class="col-md-3 user-content">
                        <div class="news-title">
                            <div class="user-profile">
                                @if ($user->profile_photo_path != null)
                                    <img src="{{ asset('storage')}}/{{$user->profile_photo_path}}">
                                @endif
                            </div>
                            <a href="{{ url('/author') }}/{{$user->id}}" class="text-sm text-gray-700 underline">{{$user->name }}</a> 
                            
                            <br><br>
                            @foreach ($user_id as $item)
                                @if ($item->user_id == $user->id)
                                    <p>Total articles last week: {{$item->total}}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</div>




@endsection