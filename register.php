<style>
    body {
        background: #ABCDEF;
    }

    .login-page {
        color: white;
        background: background: #001119;
        background:
            -webkit-linear-gradient(to right, #001119, #3b426e);
        background:
            linear-gradient(to right, #001119, #3b426e);
        margin: auto;
        box-shadow:
            0px 2px 10px rgba(0, 0, 0, 0.2),
            0px 10px 20px rgba(0, 0, 0, 0.3),
            0px 30px 60px 1px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 60px;
    }

    .login-page .head {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-page .head .company {
        font-size: 2.2em;
    }

    .login-page .msg {
        color: white;
        text-align: center;
    }

    .login-page .form input[type=text].text {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
    }

    .login-page .form .text::placeholder {
        color: #D3D3D3;
    }

    .login-page .form input[type=password].password {
        border: none;
        background: none;
        box-shadow: 0px 2px 0px 0px white;
        width: 100%;
        color: white;
        font-size: 1em;
        outline: none;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .login-page .form .password::placeholder {
        color: #D3D3D3;
    }

    .login-page .form .btn-login {
        background: none;
        text-decoration: none;
        color: white;
        box-shadow: 0px 0px 0px 2px white;
        border-radius: 3px;
        padding: 5px 2em;
        transition: 0.5s;
    }

    .login-page .form .btn-login:hover {
        background: white;
        color: dimgray;
        transition: 0.5s;
    }

    .login-page .forgot {
        text-decoration: none;
        color: white;
        float: right;
    }

    @media screen and (max-width: 768px) {

        form {
            margin-bottom: 20px;
        }

        .btn-login {
            margin-bottom: 10px;
        }

        .login-page .forgot {
            padding-top: 3px;
            float: none;
            text-align: center;
        }

        .login-page {
            padding: 60px 30px;
        }
    }
</style>
<section class="pcb-breadcrumb">
    <h1>Register to PC Builder</h1>
    <span><a href="?page=home">Home</a><i class="fa fa-angle-right"></i><a href="?pahe=register">Register</a></span>
</section>
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-12 col-md-8 content">
                <section class="login-page" id="login-page">
                    <div class="align-items-center justify-content-center pb-3 d-block d-md-flex text-center">
                        <img src="assets/images/logo-80.png">
                        <h4>Create Your Account</h4>
                    </div>
                    <div id="server-message" class="align-items-center justify-content-center pb-3 d-block d-md-flex">
                    </div>
                    <div class="form">
                        <form method="POST" action="#" id="idForm">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control mb-3" placeholder="First Name"
                                        name="firstname" pattern="[A-Za-z \.]{2,32}"
                                        title="The first name you entered is invalid!" required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control mb-3" placeholder="Last Name" name="lastname"
                                        pattern="[A-Za-z \.]{0,32}" title="The last name you entered is invalid!">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control mb-3" placeholder="Username" name="username"
                                        pattern="[A-Za-z0-9-_\.]{5,32}"
                                        title="You can only use A-Z a-z 0-9 and symbols (.-_) in your username, and a minimum of five characters is required."
                                        required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" class="form-control mb-3" placeholder="Email" name="email"
                                        pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                        title="The email you entered is invalid!" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="password" class="form-control mb-3" placeholder="Password"
                                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&amp;*_=+-]).{8,20}$"
                                        title="To ensure security, the password must contain at least 8 characters, including one uppercase, one lowercase, one number, and one symbol from (!@#$%^&amp;*_=+-)"
                                        name="password" id="p1" required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="password" class="form-control mb-3" placeholder="Confirm Password"
                                        name="password_check" id="p2" required="">
                                </div>
                            </div>
                            <br>

                            <button type="submit" value="submit" name="login" class="btn-md btn-login"
                                id="do-login">Register</button>

                        </form>

                        <a href="?page=login" class="forgot">Already Have an Account?</a>

                    </div>
                </section>
            </div>
        </div>
    </div>
</section>