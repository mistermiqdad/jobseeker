<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/jobseeker/public"><img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Jobify Logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo e(url('/register')); ?>" class="btn btn-primary rounded postJob">Register</a></li>
                    <li class="active">
                        <!-- Button trigger modal -->
                        <a href="javascript:void(0)" data-backdrop="true" class="btn btn-primary rounded ml-15 openModalLogin"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>