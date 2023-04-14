<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        {{-- <link rel="stylesheet" href="resources\css\style.css"> --}}
    </head>
   
    <body>
        <div class="container">
          <h2>Login</h2>
          
            <form action="/login" method="POST">
                @csrf
                <label>email</label><br>
                <input name="email"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                <button type="submit">Log in</button>
            </form>
            <button onclick="location.href='/register'">register</button>
        </div>     
    </body>
</html>