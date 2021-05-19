
<?php $this->view("eshop/layout/header", $data);?>

    <div class='wrapper bg-wrapper'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-signup mt-5">
                        <form class="form-horizontal" role="form" id="signup-form" method="post">
                            <h2 class="form__name">Sign up</h2>
                            <div class="row">
                                <div class="col-lg-8 col-xl-6 col-xl-offset-3 col-lg-offset-2">
                                    <div class="form-group mb-4 row">
                                        <label for="firstName" class="col-md-3 control-label  d-flex">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" id="username" name="username" value="<?php isset($_POST['username']) ? $_POST['username'] : ''?>" placeholder="User Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4  row">
                                        <label for="lastName" class="col-md-3 control-label  d-flex">Full
                                            Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="lastName" name="fullname" value="<?php isset($_POST['fullname']) ? $_POST['fullname'] : ''?>" placeholder="Full Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4 row">
                                        <label for="email" class="col-md-3 control-label  d-flex ">Email
                                        </label>
                                        <div class="col-md-9">
                                            <input type="email" id="email" value="<?php isset($_POST['email']) ? $_POST['email'] : ''?>" placeholder="Email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4 row">
                                        <label for="phoneNumber" class="col-md-3 control-label  d-flex ">Phone
                                            number
                                        </label>
                                        <div class="col-md-9">
                                            <input type="phoneNumber" name="phonenumber" value="<?php isset($_POST['phonenumber']) ? $_POST['phonenumber'] : ''?>" id="phoneNumber" placeholder="Phone number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4 row">
                                        <label for="dateofbirth" class="col-md-3 control-label  d-flex ">Date of
                                            Birth</label>
                                        <div class="col-md-9">
                                            <input type="date"  value="<?php isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : ''?>" id="dateofbirth" name="dateofbirth" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4 row">
                                        <label class="control-label col-md-3 d-flex ">Gender</label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="maleRadio" name="gender"
                                                               value="Male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="femaleRadio" value="Female"
                                                               name="gender"> Female
                                                    </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="maleRadio" value="Other"
                                                               name="gender"> Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  mb-4 row">
                                        <label for="password" class="col-md-3 control-label  d-flex ">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" value="<?php isset($_POST['password']) ? $_POST['password'] : ''?>" id="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4 row">
                                        <label for="password" class="col-md-3 control-label  d-flex ">Confirm
                                            Password</label>
                                        <div class="col-md-9">
                                            <input type="password"  value="<?php isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : ''?>" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                                        </div>
                                    </div>
                                    <hr />
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="isagree" id="isagree"
                                                           name="isagree">&emsp;
                                                    I accept the <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a> and <a href="#">User Of
                                                        Personal Information</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    check_error();
                                    ?>
                                    <button type="submit" class="btn btn-primary" style="width:100%; margin:15px 0px;">Complete Sign
                                        up</button>
                                </div>
                            </div>
                            <p class="text-center mt-4">Already Registered? <a href="login">Log in</a> here</p>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->view("eshop/layout/footer");?>