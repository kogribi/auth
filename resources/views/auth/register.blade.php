<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reģistrēties</h1>
    <form method="post" action="/register">
    @csrf
    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <label>
    <input name="first_name" required>
    </label>
    <label>
    <input name="last_name" required>
    </label>
    <label>
    <input name="email" type="email" required>
    </label>
    <label>
    <input name="password" type="password" required>
    </label>
    <label>
    <input name="password_confirmation" type="password" required>
    </label>
    <button>Saglabāt</button>
    </form>
</body>
</html>
