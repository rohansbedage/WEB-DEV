<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location:G-Store.php'); }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Sign Up</title>
</head>

<body>
<style>

body{
  background-image: url('img/crevasse-wallpaper-.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;


}  
.container {
  background-image: url('img/coconut_tree_blac.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;

}
</style>


  <div class="container font-weight-normal shadow-lg p-3 mb-4 my-5 bg-light rounded text-dark text-center">

    <div class="row g-3">
      <div class="container my-4 z-depth-1">

        <section class="dark-grey-text p-5">

          <div class="row">

            <div class="col-md-5 col mb-4 mb-md-0">

         

            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <div class="col-md-4  col mb-lg-1 ">


              <form class="text-center" method='post' action='includes/signup_script.php'>
              <br>
                <p class="h4 mb-4 display-6 ">Sign up</p>
                <br>  

                <div class="form-row row g-3">

                  <div class="col">

                    <input type="text" name="name" class="form-control shadow-lg p-2 text-center bg-white rounded"
                      placeholder="Name" required="true">
                  </div>



                  <div class="col">
                    <input type="email" class="form-control  shadow-lg p-2 text-center bg-white rounded"
                      placeholder="Email" name="email" required="true" required
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                  </div>


                  <div class="form-group">
                    <input type="contactno" class="form-control shadow-lg p-2 text-center bg-white rounded"
                      id="contactno" name="contactno" placeholder="+91 90000 00000" pattern="[789][0-9]{9}"  required>

                  </div>


                  <div class="form-group">

                    <input type="password" class="form-control  shadow-lg p-2 text-center bg-white rounded"
                      placeholder="Password " name="password" required="true" pattern=".{6,}">

                  </div>

                  <button type="submit"
                    class="btn d-grid  btn-block my-4  shadow-lg  text-center  bg-light rounded">Sign in</button>

 <div style="color:#FF0000;">
                    <?php echo $error=filter_input(INPUT_GET,'m'); ?>
                  </div>


                  <p class="text-center">Already Have an Account ?
                    <a href="login.php">Login</a>
                  </p>

                 



                  &nbsp;
              </form>
    </div>
    </div>
      </section>


  </div>
         
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

   
</body>

</html>