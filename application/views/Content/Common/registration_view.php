

<!DOCTYPE html>
<html lang="">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/semantic.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'> -->
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/js/semantic.min.js"></script>

    <title>USC - Online Facility Reservation and Managment System</title>
    
</head>

<body>
 <!-- ADMIN HEADER-->
<div class="top-border"></div>
<div class="ui container" style="min-height:65%; ">
<div class="ui very padded raised text container segment">    
 <form  class="ui form mycenter" action = "<?php echo base_url() ?>main/new_user_register" method="post">
  <h3>Create an Account</h3><br><br>
  <div class=" field">
   <div class="ui grid">
   
    <div class="five wide column right aligned"><label>First Name</label></div>
    <div class="eleven wide column"><input type="text" name="firstname" autocomplete="new-firstname"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
    </div>
  </div>
  <div class=" field">
    <div class="ui grid">
     <div class="five wide column right aligned"><label>Last Name</label></div>
    <div class="eleven wide column"><input type="text" name="lastname" autocomplete="new-lastname"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
    </div>
  <br>
  <div class=" field">
    <div class="ui grid">
     <div class="five wide column right aligned"><label>Password</label></div>
    <div class="eleven wide column"><input type="password" name="password" autocomplete="new-password"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
  <div class=" field"><div class="ui grid">
     <div class="five wide column right aligned"><label>Email</label></div>
    <div class="eleven wide column"><input type="text" name="email" autocomplete="new-email"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
     <div class=" field"><div class="ui grid">
     <div class="five wide column right aligned"><label>Department</label></div>
    <div class="eleven wide column"><input type="text" name="department" autocomplete="new-department"></div>
    <span style="color:#de3939;"><?php echo validation_errors(); ?></span>
  </div>
     </div>
     

  <button class="ui button mybutton" type="submit">Submit</button>
</form>
</div>
     </div>
<!-- End of top menu -->
<script>
 $(document).ready(function(){
    $('.ui.dropdown').dropdown({transition: 'drop'});
     
});
</script>




