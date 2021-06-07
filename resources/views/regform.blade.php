<h1>User Registration</h1>
@if (session('user')) 
    
<h3>{{session('user')}} is registered</h3>
@endif
<form action="user" method="post">
    @csrf
    User Name:<input type="text" name="username" placeholder="User name"><span style="color: red">@error('username')*{{$message}}
     @enderror</span><br><br>
    Email:<input type="email" name="email" placeholder="Email" ><span style="color: red">@error('email')*{{$message}}
        @enderror</span><br><br>
    Password:<input type="password" name="password" placeholder="password" ><span style="color: red">@error('password')*{{$message}}
        @enderror</span><br><br>
    <button type="submit">Registration</button>
</form>