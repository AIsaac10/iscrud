<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-page.css">
</head>
<body>
    <header class="headerSecurity">
        <div class="h1PlantGestor">
            <h1 class="headerTitle">
                PlantGestor
            </h1>
        </div>

        <?php
                require "lock.php";
                echo "Bem-vindo " . $_SESSION['usuario_nome'];
        ?>
        <div class="logoutInput">
            <form action="logout.php">
                <input type="submit" value="sair" class="logout">
            </form>
        </div>
    </header>
    <nav>
        <div class="criarElemento">
            <a class="linkNav" href="">criar elemento</a>
        </div>
        <a class="linkNav" href="cultivo.php">cultivo</a>
        <a class="linkNav" href="colheita.php">colheita</a>
        <a class="linkNav" href="dashboard.php">dashboard</a>
    </nav>
    <h1 class="h1Tipo">
        dashboard
    </h1>
</body>
</html>