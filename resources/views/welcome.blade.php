@extends('layouts.layout')

@section('content')
    @auth
        <form action="submit" method="POST">
            @csrf
            <input class="input-title newsTitle" type="text" name="title" placeholder="Title">
            <textarea class="newsText" name="text" placeholder="Text"></textarea>
            
            <p>Authors:</p>

            @foreach ($authors as $author) 
            <div class="input-content">
                <input type="checkbox" id="author{{$author->id}}" name="authors[]" value="{{$author->id}}">
                <label for="author{{$author->id}}">{{$author->name}}</label>
            </div>
            @endforeach
            <button id="checkBtn" type="submit">Submit</button>
        </form>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#checkBtn').click(function() {
                  checkedTitle = $(".newsTitle").val();  
                  checkedText = $(".newsText").val();  
                  checked = $("input[type=checkbox]:checked").length;
                  

                  if(checkedTitle == ''){
                    alert("You must fill all fields.");
                    return false;
                  }

                    if(checkedText == ''){
                        alert("You must fill all fields.");
                        return false;
                    }

                  if(!checked) {
                    alert("You must check at least one author.");
                    return false;
                  }
                });
            });
            </script>

    @endif
@endsection