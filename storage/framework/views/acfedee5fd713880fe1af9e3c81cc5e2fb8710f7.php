<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home"><img src="../public/assets/img/logo.png" alt="Jobify Logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register" class="btn btn-primary rounded postJob">Register</a></li>
                    <li class="active">
                        <!-- Button trigger modal -->
                        <a data-toggle="modal" href="#loginModal" data-backdrop="true" class="btn btn-primary rounded ml-15"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="../public/assets/img/logo.png" alt="Jobify Logo" width="130px">
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Great to have you back!</h3>
                    <div class="row">
                        <form method="POST" action="" class="col-lg-10" id="loginForm">
                            <div class="form-group">
                                <label for="emai">Email address</label>
                                <input type="email" class="form-control" name="email" id="emai" aria-describedby="emailHelp" placeholder="Your email" autofocus="autofocus">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                            </div>
                            <input class="btn btn-primary col-lg-12" name="commit" type="submit" value="Sign in to your account">
                        </form>
                    </div> 
                </div>
                <div class="modal-footer">
                    <p class="text-center">New here? <a data-toggle="modal" data-dismiss="modal" href="#signupModal" data-backdrop="true">Create an Jobify account</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="../public/assets/img/logo.png" alt="Jobify Logo" width="130px">
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Great to see you here!</h3>
                    <p class="text-center">Let’s set up your account in just a couple of steps.</p>
                    <div class="row">
                        <form method="POST" action="" class="col-lg-10" id="loginForm">
                            <div class="form-group">
                                <label for="fName">First name</label>
                                <input type="text" class="form-control" name="fName" id="fName" placeholder="Your first name" autofocus="autofocus">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="lName">Last name</label>
                                <input type="text" class="form-control" name="lName" id="lName" placeholder="Your last name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="emai">Email address</label>
                                <input type="email" class="form-control" name="email" id="emai" aria-describedby="emailHelp" placeholder="Your email">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <p class="terms center">By creating an account you agree to our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</p>
                            <input class="btn btn-primary col-lg-12" name="commit" type="submit" value="Set up your Jobify account">
                        </form>
                    </div> 
                </div>
                <div class="modal-footer">
                    <p class="text-center">Already got an account? <a data-toggle="modal" data-dismiss="modal" href="#loginModal" data-backdrop="true">Sign in here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Post a job Modal -->
    <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="../public/assets/img/logo.png" alt="Jobify Logo" width="130px">
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Great to see you here!</h3>
                    <p class="text-center">Let’s set up your account in just a couple of steps.</p>
                    <div class="row">
                        <form method="POST" action="" class="col-lg-10" id="loginForm">
                            <div class="form-group">
                                <label for="country">Select your country</label>
                                <select class="form-control">
                                    <option>Bulgaria</option>
                                    <option>France</option>
                                    <option>Italy</option>
                                    <option>Russia</option>
                                    <option>Ukraine</option>
                                </select>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="">What is your organization</label>
                                <div class="checkbox">
                                    <label for="self-emoployed">
                                        <input type="checkbox" value="" name="self-emoployed" id="self-emoployed">
                                        Self-Employed
                                    </label>
                                    <label for="state">
                                        <input type="checkbox" value="" name="self-emoployed" id="state">
                                        State/Common 
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="eik">EIK / BULSTAT</label>
                                <input type="text" class="form-control" id="eik" name="eik" placeholder="">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <p class="terms center">By creating an account you agree to our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</p>
                            <input class="btn btn-primary col-lg-12" name="commit" type="submit" value="Set up your Jobify account">
                        </form>
                    </div> 
                </div>
                <div class="modal-footer">
                    <p class="text-center">Already got an account? <a data-toggle="modal" data-dismiss="modal" href="#loginModal" data-backdrop="true">Sign in here</a></p>
                </div>
            </div>
        </div>
    </div>