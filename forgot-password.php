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
    <h1>Retreive Password for PC Builder</h1>
    <span><a href="?page=home">Home</a><i class="fa fa-angle-right"></i><a
            href="?page=forgot-password">Forget Password</a></span>
</section>

<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-12 col-md-8 content">
                <section class="login-page" id="login-page">
                    <div class="align-items-center justify-content-center pb-3 d-block d-md-flex text-center">
                        <img src="assets/images/logo-80.png">
                        <h4>Forgot Your Password?</h4>
                    </div>
                    <div class="form">
                        <form method="POST" action="#" id="idForm">
                            <input type="text" class="form-control mb-3" placeholder="Username" name="forgot_username"
                                id="username" required="">
                            <p style="color: white; text-align:center; font-weight: 700">OR</p>
                            <input type="text" class="form-control mb-3" placeholder="Email" name="forgot_email"
                                id="email" required="">
                            <button type="submit" value="submit" name="login" class="btn-md btn-login"
                                id="do-login">Retreive Password</button>
                        </form>
                        <a href="?page=login" class="forgot">Back to Login Page</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>