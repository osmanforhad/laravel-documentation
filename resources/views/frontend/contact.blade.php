<h4>Welcome, {{ $name }}</h4>

<p> Previous Url: {{ url()->previous() }} </p>

<p> Current Url: {{ url()->current() }} </p>

<form action="{{ route('teacher.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="write your name">
    <br>
    <input type="email" name="email" placeholder="write your email">
    <br>
    <button type="submit">Submit</button>
</form>

@guest
<a href="#">login</a>
@else
<a href="#">profile</a>
@endguest