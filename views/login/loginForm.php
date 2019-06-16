<div class="limiter">
    <div class="container-login100" style="background-image: url('assets/images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="models/login/login.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button name="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="?page=login&content=register">
                        Create an account?
                    </a>
                    <span >
                        <?php if(isset($_SESSION['error'])): ?>
                            <ul>
                        <?php foreach($_SESSION['error'] as $error): ?>
                            <li class="error-login"><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                        <?php endif; ?>
                    </span>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="?page=home">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>