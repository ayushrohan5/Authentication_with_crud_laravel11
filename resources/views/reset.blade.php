<!-- resources/views/auth/passwords/reset.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('reset.css') }}">
</head>
<body>
    <h2>Reset Password</h2>
    <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ request()->route('token') }}">

    <div>
        <label for="email">Email Address</label>
        <input id="email" type="email" name="email" value="{{ old('email', request()->email) }}" >
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
    </div>

    <div>
        <label for="password-confirm">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Reset Password</button>
    </div>
</form>

</body>
</html>
