<!DOCTYPE html>
<html>
  <head>
    <title>Basic of Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:200,300,400,700" rel="stylesheet"> 
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="css/style.css" type="text/css" /> 
  </head>
  <body>   
    <!-- Bootstrap contact form -->
    <form action="" class="simple_form ml-auto mr-auto mt-4 p-5 bg-white">
      <h3 class="text-center text-uppercase">Contact Form</3>
      
      <div class="form-group">
        <label for="user_name">Name</label>
        <input type="text" class="form-control" id="username" placeholder="Enter your name.">
      </div>

      <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" id="useremail" placeholder="Enter your email.">
      </div>

      <div class="form-group">
        <label for="user_contact">Contact Number</label>
        <input type="text" class="form-control" id="usercontact" placeholder="Enter your contact number.">
      </div>

      <div class="form-group">
        <label for="user_message">Message</label>
        <textarea class="form-control" id="user_message" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary w-100 border-0 btn-lg rounded-0">Submit</button>
    </form>
             
    <!-- jQuery, Popper.js, Bootstrap Files -->
    <script type="text/javascript" src="js/jquery.min.js"></script>   
    <script type="text/javascript" src="js/popper.js"></script>   
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>  
    <script type="text/javascript" src="js/script.js" ></script>  
  </body>
</html>