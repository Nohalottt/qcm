
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
         <span>Question 4:Which technology plays a crucial role in Production 4.0?</span><br> <br>
            <input type="radio" name="q" id="" value="r1">Fax machines for communication. <br> <br>
            <input type="radio" name="q" id="" value="r2"> Cloud computing and data analytics. <br> <br>
            <input type="radio" name="q" id="" value="r3">Traditional paper-based record-keeping systems. <br> <br>
            <input type="radio" name="q" id="" value="r4">Manual inventory management methods.<br> <br>
            <input type="submit"name="valider"  class="b">
         
        </form>
        <?php 
        session_start();
       
        if(isset($_POST['valider'])){
            $rep=$_POST['q'];
            if($rep=='r2'){
                $_SESSION['counter']  ++;
            echo  'score is'  .$_SESSION['counter'] ;
            echo '<h5>Answer is correct   </h5>';
          
            }else{
            echo '<h5>Answer is wrong</h5>';
            echo   'score is'.$_SESSION['counter'] ;
            
            }
        }
        ?>
    </div>
    
</body>
</html>