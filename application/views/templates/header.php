
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link type="text/css" rel="stylesheet" href="../css/booking.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/home.css">
    <link rel='stylesheet' href="<?php echo base_url();?>assets/CSS/allski.css">
    <link rel='stylesheet' href="<?php echo base_url();?>assets/CSS/login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/resultPage.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/register.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    
    <link type="text/css" rel="stylesheet" href="../css/booking.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Travel Agency</title>
  </head>
  <body>
  
      
        <header>
          <nav id="">
            <div>
              <a href="<?php echo base_url();?>index.php/ski">
                <img src="<?php echo base_url();?>assets/images/logo.png" alt="HTML tutorial" style="width:42px;height:42px;border:0">
              </a>
            </div>

            <div><a href="<?php echo site_url();?>/ski">About Us</a></div>
            <div><a href="<?php echo site_url();?>/stats">Statistics</a></div>          
            <div><a href="<?php echo site_url();?>/allski">I Want To See All!</a></div>
            <div><a href="<?php echo site_url();?>/findski">I'm Alredy Pro Dude</a></div>
            <div><a href="<?php echo site_url();?>/booking" class="last-a-nav">Book Now!</a></div>
            <?php if($user != NULL){

              echo " <div> <a href='".site_url()."/userDetails'> hello ".$user['name']."</a> </div>";
              echo "<div> <a href='".site_url()."/login/logout'>logout</a></div>";
            }else{
              echo "<div> <a href=".site_url()."/login>login</a></div>";
              echo "<div> <a href=".site_url()."/register>register</a></div>";
            }
            
            ?>

            <!-- <div><a href="<?php echo site_url();?>/login">Login</a></div> -->
              
          </nav>
        </header>
      
               