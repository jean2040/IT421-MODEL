@if (count($errors) > 0)
    <div class = "alert alert-danger">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif