<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">

<?php
if (isset($_SESSION['usuario'])) {
    echo "<div class='alert alert-success text-center'>
            Usuário logado: <strong>" . $_SESSION['usuario'] . "</strong>
          </div>";
    echo '<div class="text-center">
            <a href="sair.php" class="btn btn-danger mt-3">Sair</a>
          </div>';
} else {
?>
    <main class="card p-4 shadow-sm">
        <h1 class="text-center mb-4">Login</h1>
        <form action="verificacao.php" method="post">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>

        <?php
        if (isset($_SESSION['erro'])) {
            echo "<p class='text-danger mt-3 text-center'>" . $_SESSION['erro'] . "</p>";
            
        }
        ?>
    </main>
<?php
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>