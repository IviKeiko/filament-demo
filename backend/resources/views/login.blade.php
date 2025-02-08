<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Courier, monospace;
            color:  #4C6A92 ;
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 0;
            box-shadow: 0 4px 8px rgba(76, 106, 146, 0.1), 0 8px 16px rgba(76, 106, 146, 0.2);

            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            letter-spacing: 2px;

        }

        .form-group {

            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-top: 25px;
            letter-spacing: 1px;
        }

        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 0;
            margin-top: 10px;
            box-sizing: border-box;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border: 1px solid #4C6A92;
            outline: none;
        }


        input[type="submit"] {
            background-color: #4C6A92;
            border: none;
            color: white;
            cursor: pointer;
            margin-top: 20px;
            letter-spacing: 1px;
        }

        input[type="submit"]:hover {
            background-color: rgba(51, 72, 99, 0.94);
        }

        .form-group:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="login-container">
    <h2>WELCOME BACK!</h2>
    <form method="POST" action="{{ route('filament.login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="LOGIN">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="remember"> Zapamti me
            </label>
        </div>

    </form>
</div>
</body>
</html>

