<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Emosense</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Login Form Template" name="keywords">
        <meta content="Login Form Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <style>
                        /* * * * * General CSS * * * * */
            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                font-weight: 400;
                color: #666666;
                background: #eaeff4;
            }

            .clearfix::after {
                content: '';
                clear: both;
                display: table;
            }

            .wrapper {
                margin: 0 auto;
                width: 100%;
                max-width: 1140px;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .container {
                position: relative;
                width: 100%;
                max-width: 600px;
                height: auto;
                display: flex;
                background: #ffffff;
                box-shadow: 0 0 5px #999999;
            }

            div.credit {
                position: relative;
                margin: 25px auto 0 auto;
                width: 100%;
                text-align: center;
                color: #666666;
                font-size: 16px;
                font-weight: 400;
            }

            div.credit a {
                color: #222222;
                font-size: 16px;
                font-weight: 600;
            }


            /* * * * * Login 1 CSS * * * * */
            .login-1 .col-left,
            .login-1 .col-right {
                padding: 30px;
                display: flex;
            }

            .login-1 .col-left {
                width: 60%;
                -webkit-clip-path: polygon(0 0, 0% 100%, 100% 0);
                clip-path: polygon(0 0, 0% 100%, 100% 0);
                background: #44c7f5;
            }

            .login-1 .col-right {
                padding: 60px 30px;
                width: 50%;
                margin-left: -10%;
            }

            @media(max-width: 575.98px) {
                .login-1 .container {
                    flex-direction: column;
                    box-shadow: none;
                }
                
                .login-1 .col-left,
                .login-1 .col-right {
                    width: 100%;
                    margin: 0;
                    -webkit-clip-path: none;
                    clip-path: none;
                }
                
                .login-1 .col-right {
                    padding: 30px;
                }
            }

            .login-1 .login-text {
                position: relative;
                width: 100%;
                color: #ffffff;
            }

            .login-1 .login-text h2 {
                margin: 0 0 15px 0;
                font-size: 30px;
                font-weight: 700;
            }

            .login-1 .login-text p {
                margin: 0 0 20px 0;
                font-size: 16px;
                font-weight: 500;
                line-height: 22px;
            }

            .login-1 .login-text .btn {
                display: inline-block;
                padding: 7px 20px;
                font-size: 16px;
                letter-spacing: 1px;
                text-decoration: none;
                border-radius: 30px;
                color: #ffffff;
                outline: none;
                border: 1px solid #ffffff;
                box-shadow: inset 0 0 0 0 #ffffff;
                transition: .3s;
                -webkit-transition: .3s;
            }

            .login-1 .login-text .btn:hover {
                color: #44c7f5;
                box-shadow: inset 150px 0 0 0 #ffffff;
            }

            .login-1 .login-form {
                position: relative;
                width: 100%;
            }

            .login-1 .login-form h2 {
                margin: 0 0 15px 0;
                font-size: 22px;
                font-weight: 700;
            }

            .login-1 .login-form p {
                margin: 0 0 10px 0;
                text-align: left;
                color: #666666;
                font-size: 15px;
            }

            .login-1 .login-form p:last-child {
                margin: 0;
                padding-top: 3px;
            }

            .login-1 .login-form p a {
                color: #44c7f5;
                font-size: 14px;
                text-decoration: none;
            }

            .login-1 .login-form label {
                display: block;
                width: 100%;
                margin-bottom: 2px;
                letter-spacing: .5px;
            }

            .login-1 .login-form p:last-child label {
                width: 60%;
                float: left;
            }

            .login-1 .login-form label span {
                color: #ff574e;
                padding-left: 2px;
            }

            .login-1 .login-form input {
                display: block;
                width: 100%;
                height: 35px;
                padding: 0 10px;
                outline: none;
                border: 1px solid #cccccc;
                border-radius: 30px;
            }

            .login-1 .login-form input:focus {
                border-color: #ff574e;
            }

            .login-1 .login-form button,
            .login-1 .login-form input[type=submit] {
                display: inline-block;
                width: 100%;
                margin-top: 5px;
                color: #44c7f5;
                font-size: 16px;
                letter-spacing: 1px;
                cursor: pointer;
                background: transparent;
                border: 1px solid #44c7f5;
                border-radius: 30px;
                box-shadow: inset 0 0 0 0 #44c7f5;
                transition: .3s;
                -webkit-transition: .3s;
            }

            .login-1 .login-form button:hover,
            .login-1 .login-form input[type=submit]:hover {
                color: #ffffff;
                box-shadow: inset 250px 0 0 0 #44c7f5;
            }
        </style>
    </head>
    <body>
        <div class="wrapper login-1">
            <div class="container">
                <div class="col-left">
                    <div class="login-text">
                        <h2>Welcome</h2>
                        <p>Already Have an Account?</p>
                        <a class="btn" href="{{ route('login')}}">Login In Here</a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        @if (Session::has('error'))
                    <div class="alert-danger" role="alert">
                        {{Session::get('error')}}
                    @endif
                        <h2 style="text-align: center">Create Account</h2>
                        <form action="{{ route('register')}}" method="POST">
                            @csrf
                            <p>
                                <label>Name<span>*</span></label>
                                <input name="name" type="text" placeholder="Name" required>
                            </p>
                            <p>
                                <label>Email<span>*</span></label>
                                <input name="email" type="text" placeholder="Email" required>
                            </p>
                            <p>
                                <label>Phone Number<span>*</span></label>
                                <input name="phone" type="text" placeholder="Phone Number" required>
                            </p>
                            <p>
                                <label>Password<span>*</span></label>
                                <input name="password" type="password" placeholder="Password" required>
                            </p>
                            <p>
                                <input type="submit" value="Register" />
                            </p>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
