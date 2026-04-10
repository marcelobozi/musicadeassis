<?php
// Recuperando os dados com verificação de existência
$signo = $_POST['signo'] ?? 'Não informado';

// Recuperando os checkboxes (array)
$caracteristicas = $_POST['caracteristicas'] ?? [];

// Pegando os valores do array de forma segura
$caract1 = $caracteristicas[0] ?? '...';
$caract2 = $caracteristicas[1] ?? '...';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">Resultado</h1>
            
            <div class="alert alert-info mt-4">
                <p class="fs-5">
                    Olá! Como uma pessoa do signo de <strong><?= htmlspecialchars($signo) ?></strong>, 
                    e também sendo uma pessoa <strong><?= htmlspecialchars($caract1) ?></strong> 
                    e <strong><?= htmlspecialchars($caract2) ?></strong>, 
                    quero te dizer que: não tenho nada para te dizer.
                </p>
            </div>

            <a href="pesquisa.php" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </div>
</div>

</body>
</html>