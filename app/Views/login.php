<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 Add User With Validation Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: #ff0000;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <form method="post" id="login" name="login"
          action="<?= site_url('/login-form') ?>">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#login").length > 0) {
        $("#login").validate({
            rules: {
                username: {
                    required: true,
                },
                password: {
                    required: true,
                },
            },
            messages: {
                username: {
                    required: "Username is required.",
                },
                password: {
                    required: "Password is required.",
                },
            },
        })
    }
</script>
</body>

</html>