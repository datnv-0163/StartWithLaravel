<h2>hello</h2>
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <input type="text" name="fullname" placeholder="user name"/>
    <br>
    <input type="password" name="password" placeholder="pass"/>
    <br>
    <button type="submit">register</button>
</form>
