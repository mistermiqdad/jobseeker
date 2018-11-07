<script>

    $(document).ready(function () {
        $(document).on('click','.openModalLogin',function(event)
        {
            event.preventDefault();
            alert('Tes');
            // $('#loginModal').modal('show');
        });
    });

</script>        
<!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="{{asset('assets/img/logo.png')}}" alt="Jobify Logo" width="130px">
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