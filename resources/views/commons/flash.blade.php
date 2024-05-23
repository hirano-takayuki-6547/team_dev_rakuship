@if ($errors->count())
<ul class="alert">
    @foreach ($errors->all() as $error)
        <li style="margin-left: 20px;font-weight: bold;color:red">{{ $error }}</li>
    @endforeach
</ul>
@endif
