<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Reset your password</h2>
<div>
    Please follow the link below to reset your password.
    {{ url('auth/reset/'.$token) }}<br/>
</div>
</body>
</html>


