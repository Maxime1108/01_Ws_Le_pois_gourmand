<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <h2>Inscription</h2>
        <form method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmer le mot de passe</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</body>
</html>


<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (!isset($_SESSION['utilisateurs'])) {
        $_SESSION['utilisateurs'] = [];
    }

    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);

    
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $error = "Tous les champs sont obligatoires.";
    } elseif ($password !== $confirmPassword) {
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        
        $_SESSION['utilisateurs'][$username] = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['message'] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
        header('Location: connexion.php');
        exit;
    }
}
?>



