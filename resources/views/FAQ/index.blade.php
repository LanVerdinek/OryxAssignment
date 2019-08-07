@extends('layouts.app')
@include('inc.messages')
@section('content')
<div class='faq-header'>
    <h1 class='section-title'>FAQ</h1>
    @if ($user = Auth::user())
        Create a new question with: <a href='FAQ/create' class='faq-edit-button'>Create new FAQ</a>
    @endif
</div>

    @if(count($posts) > 0)
         @foreach($posts as $post)
            <div class='faq-question-holder'>
                <div>
                    <h3 class='faq-question' style="display:inline-block;">{{$post->title}}</h3>
                    @if ($user = Auth::user())
                        <div class="faq-button-holder">
                            <a class="faq-edit-button" href="FAQ/{{$post->id}}/edit">Edit</a>
                            <div style="display:inline-block;"> 
                                {!!Form::open(['action' => ['FAQController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('X', ['onclick' => 'return confirm_delete_faq()', 'class' => 'faq-delete-button'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                        <script>
                            function confirm_delete_faq() {
                                return confirm("Do you really want to delete this?");
                            }
                        </script>
                    @endif
                </div>
                <div>
                    <p style="display:inline-block;">{{$post->body}}</p>
                </div>
            </div>
         @endforeach
         {{$posts->links()}}
    @else 
        <p>No posts found</p>
    @endif
@endsection