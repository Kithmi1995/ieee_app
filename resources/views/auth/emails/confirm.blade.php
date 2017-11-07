<html>
    <head>
        <title>IEEE Career Fair - Confirm your email address</title>
    </head>
<body>
    <h2>
        IEEE Career Fair - Confirm your email address
    </h2>

    <div>
        <a href="{{ URL::to('/confirm_mail/'.$user->confirmation_code) }}">Click here</a> to confirm your account.
        <br>
        Or use this code:
        <strong>
            {{ $user->confirmation_code }}
        </strong>
    </div>

</body>
</html>