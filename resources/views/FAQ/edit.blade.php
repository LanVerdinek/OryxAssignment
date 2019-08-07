@if ($user = Auth::user())
    @extends('layouts.app')
    @section('content')
        <div class='edit-create-section'>
            <h1 class='section-title'>Edit Post</h1>
            {!! Form::open(['action' => ['FAQController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'edit-create-button'])}}
                <a href='/OryxNaloga/public/FAQ' class='edit-create-button'>Cancel</a>
            {!! Form::close() !!}
            @include('inc.messages')
        </div>
    @endsection
@else 
    <script type="text/javascript">
        window.location = "{{ url('/login') }}";
    </script>
@endif