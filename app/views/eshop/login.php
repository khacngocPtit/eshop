
<?php $this->view("eshop/layout/header", $data);?>
    <div class='wrapper bg-wrapper'>
        <div class="container">
            <div class="row">

                <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8  ">

                    <div class="login-form">
                        <h2 class="form__name">Login</h2>
                        <div class="content">
                            <form action="#" method="POST" id="form-login">
                                <div class="form-group">
                                    <label for="usernameIp" class="mb-3">Username</label>
                                    <input type="text" class="form-control" id="usernameIp"
                                            placeholder="Username" name="username">
                                    <p class="form-message mt-3"></p>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="mb-3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword"
                                           placeholder="Password" name="password">
                                    <p class="form-message mt-3"></p>
                                </div>
                                <?php check_error(); ?>
                                <a href="#" style="float:right;" class="mb-4">Forgot password ?</a>
                                <button type="submit" class="btn btn-primary w-100" style="width:100%; margin: 15px 0px;">Log in</button>
                            </form>
                        </div>
                    </div>
                    <p class="text-center"> Are you new to E Shop? <a href="signup" style="color: #00A0E9;"> Sign
                            Up</a> here</p>
                </div>
            </div>
        </div>
    </div>

<?php $this->view("eshop/layout/footer");?>