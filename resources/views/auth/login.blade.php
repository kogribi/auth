<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logins</h1>
    <form method="post" action="/login">
    @csrf
    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <label>email
    <input name="email" type="email" required value="{{old("email")}}">
    </label>
    <br>
    <label>password
    <input name="password" type="password" required value="{{old("password")}}">
    </label>
    <br>
    <label>confirm password
    <input name="password_confirmation" type="password" required value="{{old("password_confirmation")}}">
    </label>
    <br>
    <button>Saglabāt</button>
    </form>
</body>
</html>