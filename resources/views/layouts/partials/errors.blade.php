@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{ $errors }}</li>
                @endforeach
        </ul>
    </div>
@endif