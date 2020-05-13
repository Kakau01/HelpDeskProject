<?php
    include_once("connection.php");

    //Get the information that the user insert in the input field
    $inputEmail = $_POST['input-email'];
    $inputPass =$_POST['input-pass'];

    //Consulting DB e getting Values.
    $dbValues = "SELECT * FROM TB_Usuario";
    $consultingDB= $connect->query($dbValues);
    $result = $consultingDB->fetch_assoc();
    $nome = $result['Nome'];
    $email = $result['Email'];
    $pass = $result['Senha'];

    //Login Validation
    if(($inputEmail === $email) && ($inputPass === $pass)){
        header('Location:newTicket.php');
    }else{
        echo "
        <script type ='text/javascript'>
            alert('You have entered an invalid username or password!');
            window.location.href='login.php';
        </script>
        ";
    }
  
    

?>