<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <title>Eric Zorn Designs</title>

 <!-- Favicons -->
 <?php include 'inc/favicon.php'; ?>

 <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script src="responsiveslides.min.js"></script>

 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <!-- Font Awesome -->
 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Lato|Passion+One" rel="stylesheet">

 <!-- Custom Styles -->
 <link rel="stylesheet" type="text/css" href="css/custom/pages/photography.css">
 <link rel="stylesheet" type="text/css" href="css/custom/nav.css">
 <link rel="stylesheet" type="text/css" href="css/custom/footer.css">


 <!-- Custom Scripts -->
 <!-- <script src="js/menu.js"></script> -->

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>

 <!-- Beginning of Wrapper -->



 <!-- Nav Bar Include -->
 <div class="main-container">
  <?php include 'inc/nav-internal.php'; ?>


  <div class="wrapper">
   <h1 class="headerText">Photography Portfolio</h1>


   <div class="subText-wrapper">
    <h2 class="subHeaderText">These 25 images are a culmination of the many projects that I have completed within the photography class at Quinnipiac University. Some of the images can portray popular sites around campus, multiple baseball games in the Spring season of 2016, different portraits, and basic photo manipulation. All of these projects are very different from one another and display the different projects in a unique way.</h2>

   </div>

   <img src="img/down-arrow.png" alt="down-arrow" class="down-arrow">
  </div>


  <div class="wrapper2">

   <?php include 'inc/gallery-slider.php'; ?>


  </div>


  <div class="wrapper3">
   <br><br><br>
   <h2 class="projectTitle">About my Project</h2>
   <br>
   <p class="projectParagraph">This assignment was given to me during a photography class. I have learned how to use the camera for different purposes as well. We have learned how to utilize different lighting techniques, lines, height, perspective, and colors/shapes. This is the final portfolio of the best twenty-five images that I have taken througbout the class with a total of hundreds of different images. Each of the assignments was given to us over a time frame with different purposes and this is a culmination of all of those projects.</p>


   <br>

   <br><br><br>


  </div>


  <!-- Footer Inlcude -->
  <?php include 'inc/footer.php'; ?>

 </div>




 <!-- JavaScript Includes -->
 <?php include 'inc/template-js.php'; ?>
 <?php include 'inc/smoothScroll.php'; ?>

</body>

</html>