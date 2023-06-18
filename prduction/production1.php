
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
    <div  class="card" >
        <form action="" method="post">
         <span>Question 1:What is Production 4.0? ?</span><br> <br>
            <input type="radio" name="q" id="" value="r1">The fourth stage of product development in the manufacturing industry. <br> <br>
            <input type="radio" name="q" id="" value="r2"> The use of advanced robotics in agricultural production. <br> <br>
            <input type="radio" name="q" id="" value="r3">The integration of digital technologies and automation in manufacturing processes. <br> <br>
            <input type="radio" name="q" id="" value="r4">A term used to describe lean production principles.<br> <br>
            <input type="submit"name="valider"  class="b">
         
        </form>
        <?php 
       session_start();
       $_SESSION['counter'] = 0;
        if(isset($_POST['valider'])){
            $rep=$_POST['q'];
            if($rep=='r1'){
            
            echo '<a href="production2.php">Answer is correct</a>';
            $_SESSION['counter']  ++;
            }else{
            echo '<a href="production2.php">Answer is wrong</a>';

            
            }
        }
        ?>
    </div>
    
</body>
</html>