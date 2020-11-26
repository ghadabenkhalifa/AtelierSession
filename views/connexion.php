<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';
$message="";
// create an instance of the controller
$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (
        !empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {
        $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
        session_start();
        $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        $_SESSION['p'] = $_POST["password"];// on stocke dans le tableau une colonne ayant comme nom "p",
        //  avec le mot de passe à l'intérieur
        $_SESSION['r']=$message;//// on stocke dans  le tableau une colonne ayant comme nom "r",
        ///  avec le rôle de chaque utilisateur à l'intérieur
        if($_SESSION['r']==='admin'){
            header('Location:Admin.php');}
        else{
            header('Location:user.php');} }
    else
        $message = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<form name="frmUser" method="post" action="">
   <div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
        <tr class="tableheader">
            <td align="center" colspan="2">Authentification</td>
        </tr>
        <tr class="tablerow">
            <td>
                <input type="text" name="email" placeholder="Email" class="login-input"></td>
        </tr>
        <tr class="tablerow">
            <td>
                <input type="password" name="password" placeholder="Password" class="login-input"></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
        </tr>
    </table>
</form>
</body>
</html>