<?php $this->view("eshop/layout/header");?>

    <div class='wrapper bg-wrapper'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                    <div class="login-form">
                        <h2 class="form__name">Login</h2>
                        <div class="content">
                            <form action="#" method="POST" id="form-login">
                                <div class="form-group">
                                    <label for="inputEmail" class="mb-3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail"
                                           aria-describedby="emailHelp" placeholder="Email" name="email">
                                    <p class="form-message mt-3"></p>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="mb-3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword"
                                           placeholder="Password" name="password">
                                    <p class="form-message mt-3"></p>
                                </div>

                                <a href="#" style="float:right;" class="mb-4">Forgot password ?</a>
                                <button type="submit" class="btn btn-primary w-100">Log in</button>
                            </form>
                        </div>
                    </div>
                    <p class="text-center"> Are you new to E Shop? <a href="signup" style="color: #00A0E9;"> Sign Up</a> here</p>
                </div>
            </div>
        </div>
    </div>




<?php $this->view("eshop/layout/footer");?>