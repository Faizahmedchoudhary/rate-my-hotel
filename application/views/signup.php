<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <section class="main_section">
    <div class="semi_div">
        <div class="form_sec illust">
           <h3>R.M.H Is An Indian Review Company.  We increase the ratings of hotels by providing genuine reviews from customers.</h3>
            <p class="text-center pt-3">Already a member? <a href="<?php echo base_url(); ?>login">log in</a></p>
        </div>
        <div class="form_sec log_form">
            <h1 class="Logo_name">Rate My Hotel</h1>
            <h2>Sign Up</h2>
        
        <?php echo form_open('pages/register'); ?>
                    
                        

                        <div class="pt-3">
                            <input  class="form-control" placeholder="Username" name="username">
                            <small><?php echo form_error('username') ?></small>

                        </div>

                        <div class="pt-3">  
                            <input  name="email" class="form-control"  placeholder="Email">   
                            <small><?php echo form_error('email') ?></small>
       
                        </div>
                        
                        <div class="pt-3">
                            <input class="form-control" name="password"  placeholder="Password"> 
                            <small><?php echo form_error('password') ?></small>
         
                        </div>

                       
                    
                        <div><input type="submit" class="btn btn-success col-md-12" value="Submit" /></div>

            

                        

                   

        </form>
    </div>
</div>
</section>



</body>
</html>
