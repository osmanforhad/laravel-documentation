<h4>Welcome, {{ $name }}</h4>

<form action="{{ route('teacher.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="write your name">
    <br>
    <input type="email" name="email" placeholder="write your email">
    <br>
    <button type="submit">Submit</button>
</form>