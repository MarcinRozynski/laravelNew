@extends('layouts.layout')

@section('content')

<style>
    .user-content{
        background-color: #212938;
        padding: 1rem;
        margin: 0.5rem;
    }

    .user-profile img{
        width: 3rem;
        height: 3rem;
    }

    .user-profile span{
        margin-left: 1rem;
    }

    #posts .row{
        text-align: center;
    }

</style>

<div id="posts"> 
    
        <div class="news-title">
            <div class="user-profile">
                @if ($user->profile_photo_path != null)
                    <img src="{{ asset('storage')}}/{{$user->profile_photo_path}}">
                @endif
                <span>{{$user->name }}</span> 
            </div>
        </div>

    <div class="row">
        @foreach ($newsUser as $newUser)
            @foreach ($news as $new)
                @if ($newUser->news_id == $new->id)
                <div class="col-md-12 user-content">
                    <div class="news-title">
                        <div class="user-profile">
                            <h3>{{$new->title}}</h3>
                            <p>{{$new->text}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endforeach
    </div>
</div>



                

@endsection