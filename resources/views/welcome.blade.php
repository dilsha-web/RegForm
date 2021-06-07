<h1>Welcome To Our website</h1>
@if (session ('user'))
<h3 style="color:red">{{session('user')}} is registered</h3>
    
@endif