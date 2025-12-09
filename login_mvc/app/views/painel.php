<?php
if (!isset($_SESSION)) {
    
}

if (!isset($_SESSION['id'])) {
    die("Você não está logado. <a href='login.php'>Entrar</a>");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>

    <a href="index.php">
        <button>Voltar </button>
    </a>
    


</body>
</html>
