<html>
    <head>
        <title>MyDevBlog</title>
</head>
<link rel="stylesheet" type="text/css" href="connexion.css">
<form action="back.php" method="POST">
    <h1>Connexion</h1>
    
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
</br></br>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
</br></br>
    <input type="submit" id='submit' value='LOGIN' >
    <?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    ?>
</form>
</html>