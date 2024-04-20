<div class="form-message pt-2">
    @if(is_string($errors) && $errors)
        <div class="alert alert-danger">
           <span class="message" role="alert">
                <div><strong>{{$errors}}</strong></div>
        </span>
        </div>
    @else
        @if(!empty($errors) && is_array($errors->all()) && count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div><strong>{{$error}}</strong></div>
                @endforeach
            </div>
        @endif
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
</div>
