
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="pr1.css">
    <title>Production4.0</title>
</head>
<body class="bg">
<h1>Production 4.0</h1>
    <div  class="card">
        <form action="" method="post">
         <span>Question 3:What is the primary goal of Production 4.0?</span><br> <br>
            <input type="radio" name="q" id="" value="r1">Reducing production efficiency and increasing costs. <br> <br>
            <input type="radio" name="q" id="" value="r2"> Streamlining supply chain management. <br> <br>
            <input type="radio" name="q" id="" value="r3">Enhancing productivity and flexibility in manufacturing.  <br> <br>
            <input type="radio" name="q" id="" value="r4">Eliminating the need for skilled workers.<br> <br>
            <input type="submit"name="valider" class="b">
         
        </form>
        <?php
         session_start();
         
        if(isset($_POST['valider'])){
            $rep=$_POST['q'];
            if($rep=='r3'){
            
            echo '<a href="production4.php">Answer is correct</a>';
            $_SESSION['counter']++;
            }else{
            echo '<a href="production4.php">Answer is wrong</a>';
            
            }
        }
        ?>
    </div>
    
</body>
</html>