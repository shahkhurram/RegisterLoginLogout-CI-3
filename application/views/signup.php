<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;

    }
</style>



<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/> -->
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input class="login-btn" type="submit" name="" value="Signup" /><br />
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Employee</h3>


                    <?php echo form_open('Signup', ['name' => 'userregistration', 'autocomplete' => 'off']); ?>
                    <div class="row register-form">

                    <div class="col-md-12">

                        <!--success message -->
                    <?php if ($this->session->flashdata('success')) { ?>
                        <p style="color:green">
                            <?php echo $this->session->flashdata('success'); ?>
                        </p>
                    <?php } ?>
                    
                    <!--error message -->
                    <?php if ($this->session->flashdata('error')) { ?>
                        <p style="color:red">
                            <?php echo $this->session->flashdata('error'); ?>
                        </p>
                    <?php } ?>
                    </div>
                        <div class="col-md-6">

                            <div class="form-group" >
                                <?php echo form_input(['name' => 'name', 'class' => 'form-control', 'value' => set_value('name'), 'placeholder' => 'Enter your fucking Name']); ?>
                                <?php echo form_error('name', "<div style='color:red'>", "</div>"); ?>
                            </div>
                            
                            <div class="form-group">
                                <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'value' => set_value('email'), 'placeholder' => 'Enter your Email ']); ?>
                                <?php echo form_error('email', "<div style='color:red'>", "</div>"); ?>
                            </div>
                            
                            <div class="form-group">
                                <?php echo form_input(['name' => 'phone', 'class' => 'form-control', 'value' => set_value('phone'), 'placeholder' => 'Enter your phone ']); ?>
                                <?php echo form_error('phone', "<div style='color:red'>", "</div>"); ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo form_input(['type' => 'password','name' => 'password', 'class' => 'form-control', 'value' => set_value('password'), 'placeholder' => 'Enter your password ']); ?>
                                <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_input(['type' => 'password','name' => 'cpassword', 'class' => 'form-control', 'value' => set_value('cpassword'), 'placeholder' => 'Confirm password']); ?>
                                <?php echo form_error('cpassword', "<div style='color:red'>", "</div>"); ?>
                            </div>
                            
                            <?php echo form_submit(['name' => 'insert', 'value' => 'Register', 'class' => 'btnRegister']); ?>
                            
                        </div>
                        
                        
                        <?php echo form_close(); ?>
                        <div class="text-center">Already have an account? <a
                        href="<?php echo site_url('Signin'); ?>">Sign in</a></div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>