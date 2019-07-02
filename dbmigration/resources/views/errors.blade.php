@if($errors->any())
<br />
<div class="notification is-dandger">
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger"> {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif