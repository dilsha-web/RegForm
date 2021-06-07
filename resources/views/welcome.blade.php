<h1>Welcome</h1>
@if (session ('user'))
<h3 style="color:red">{{session('user')}} is registered</h3>
    
@endif