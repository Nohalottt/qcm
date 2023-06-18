<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <link rel="stylesheet" href="pr.css">
   

</head>
<style>
    span{
  color: #87CEEB;
  }
  .bg{
    background-image: url(image/q.webp);
    background-repeat: no-repeat;
    background-size: 1280px   700px;

}
h1{
    color: white;
    transform: translateY(400%);
}
.button-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #87CEEB;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transform: translateY(500%);
    margin-left: 5%;
  }
  
  .button-link:hover {
    background-color: #87CEEB;
  }
  
</style>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-light  " style="background-color: #e3f2fd;">
  <div class="container-fluid"  >
    <a class="navbar-brand" href="#"  style="color: #87CEEB;">Quiz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Production4.0</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Qualite">Qualite4.0</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Maintenance">Maintenance4.0</a>
        </li>
        
      
       
      </ul>
    </div>
  </div>
</nav>
   
<div class="container   ">

   <div class="content   ">
      <h1   >welcome <span   ><?php echo $_SESSION['admin_name'] ?></span></h1>
      <a href="production1.php" class="button-link">Start Quiz about Production</a>
      
   </div>

</div>

</body>
</html>