<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('template.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php echo $__env->make('template.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
   
     <!-- Header -->
    <section class="header_yellow" id="register-company-header">
        <div class="container">
            <span class="section-heading">Registration</span>
        </div>
    </section>

    <section id="company-register-form">
        <div class="container">
            <form class="form-horizontal">
                    <div class="form-group col-lg-6 col-md-6 col-xs-6">
                        <div class="col-xs-12 col-lg-12">
                            <label class="col-xs-12 col-lg-6 control-label pl-0 text-left navy required">Full Name</label>
                            <input type="text" id="name" class="form-control non-rounded input-md" required name="name" placeholder ="Your full name">
                        </div>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-xs-6">
                    <div class="col-xs-12 col-lg-12">
                        <label class="col-xs-12 col-lg-6 control-label pl-0 text-left navy required">Date Of Birth</label>
                        <input type="text" required="" class="form-control non-rounded input-md" id="datepicker">
                    </div>
                </div>

                    <div class="form-group col-lg-6 col-md-6 col-xs-6">
                        <div class="col-xs-12 col-lg-12">
                            <label class="col-xs-12 col-lg-6 control-label pl-0 text-left navy required">Email Address</label>
                            <input type="email" id="eik" class="form-control non-rounded input-md" required name="eik" placeholder ="Your email address">
                        </div>
                    </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-6">
                    <div class="col-xs-12 col-lg-12">
                        <label class="col-xs-12 col-lg-6 control-label pl-0 text-left navy">Phone Number</label>
                        <input type="text" onkeypress="return hanyaAngka(event);" class="form-control non-rounded input-md" name="phone" placeholder="Your phone number" />
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-6">
                    <div class="col-xs-12 col-lg-12">
                        <label class="col-xs-12 col-lg-6 control-label pl-0 text-left navy required">Password</label>
                        <input type="password" id="password" class="form-control non-rounded input-md" required name="password" placeholder="Your password" />
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-6">
                    <div class="col-xs-12 col-lg-12">
                        <label class="col-xs-12 col-lg-12 control-label pl-0 text-left navy required">Gender</label>
                          <div class="radio-inline">
                            <input type="radio" name="gender" required=""> Male
                          </div> 
                          <div class="radio-inline">
                            <input type="radio" name="gender" required=""> Female
                          </div>
                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                    <div class="col-sm-3"> 
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registration" />
                    </div>
                </div>
                
                </div>
                
            </form>
        </div>
    </section>

    <!--Footer-->
    <?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

    <!--Jquery-->
    <?php echo $__env->make('template.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

</body>
</html>
