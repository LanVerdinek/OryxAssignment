@if(count($errors) > 0)
    @foreach($errors ->all() as $error)
        <div style="color:red !important;" class="alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div style="color:red !important;" class="alert-danger">
        {{session('error')}}
    </div>
@endif