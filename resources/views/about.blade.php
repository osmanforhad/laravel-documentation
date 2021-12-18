<h1>This is my about page</h1>

<a href="{{ URL::to('/') }}">Home</a>
<a href="{{ url('/contact') }}">Contact</a>

<h1>Store your about info</h1>
<br>
<form action="{{ route('about.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="write your name">
    <br>
    <input type="email" name="email" placeholder="write your email">
    <br>
    <input type="text" name="phone" placeholder="write your contact number">
    <br>
    <button type="submit">Submit</button>
</form>