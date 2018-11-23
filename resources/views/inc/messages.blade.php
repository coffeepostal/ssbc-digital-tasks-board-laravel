@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="grid-container">
            <div class="callout alert">
                <p>{{$error}}</p>
            </div>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="grid-container">
        <div class="callout success">
            <p>{{session('success')}}</p>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="grid-container">
        <div class="callout alert">
            <p>{{session('error')}}</p>
        </div>
    </div>
@endif
