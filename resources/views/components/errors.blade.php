@if ($errors->any())
    <ul class="alert alert-danger" style="padding: 30px;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif