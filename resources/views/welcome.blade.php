<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>Form</title>
</head>
<body>
    <form action="/register" method="post" class="form-register" enctype="multipart/form-data">
        @csrf
        <h2>Register</h2>
        <div>
            
            <input type="text" name="full_name">
        </div>
        <div >
            
            <input type="text" name="username">
            
        </div>
        <div>
            
            <input type="email" name="email">
            
        </div>
        <div>
            
            <input type="date" name="birthdate" >
            
        </div>
        <div>
            
            <input type="text" name="phone" "> 
    
        </div>
        <div >
            
            <input type="text" name="address"">
        </div>
        <div >
            <input type="password" name="password"">
        </div>
        
        <button type="submit" name="submit" value="Register">
            Register
        </button>
        </form>
    </div>
</body>
</html>