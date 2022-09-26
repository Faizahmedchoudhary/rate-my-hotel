<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <section class="main_section">
    <div class="semi_div">
        <div class="form_sec illust">
           <h3>R.M.H Is An Indian Review Company.  We increase the ratings of hotels by providing genuine reviews from customers.</h3>
           <p class="text-center pt-3">Dont have an Account? <a href="<?php echo base_url(); ?>">Sign Up</a></p>
        </div>
        <div class="form_sec log_form">
            <h1 class="Logo_name">Rate My Hotel</h1>
            <h2>Login</h2>
 


    <?php echo form_open('pages/login'); ?>        
            
            
            <div class="pt-3">
               
                <input style="color:white !important;"  name="email" class="form-control"   placeholder="Email">   
                <small><?php echo form_error('email') ?></small>
       
            </div>
            
            
            <div class="pt-3">
               
                <input name="password" class="form-control"  placeholder="Password">          
                <small><?php echo form_error('password') ?></small>
            </div>

            
            
            
           <button><input type="submit" name=""></button>

</form>                       

<?php  if ($this->session->flashdata('status')): ?>
        <div class="mt-3 alert alert-primary" role="alert">
              <?= $this->session->flashdata('status'); ?>
        </div>
    <?php  endif; ?>

        </div>
    </div>
</section>
</body>
</html>
