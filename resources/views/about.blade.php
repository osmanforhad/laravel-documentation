<h1>This is my about page</h1>

<a href="{{ URL::to('/') }}">Home</a>
<a href="{{ url('/contact') }}">Contact</a>

<form action="{{ route('about.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="write your name">
    <br>
    <input type="email" name="email" placeholder="write your email">
    <br>
    <button type="submit">Submit</button>
</form>