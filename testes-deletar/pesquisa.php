<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Signos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 card shadow p-4">
            <h2 class="mb-4">Mini Pesquisa</h2>
            
            <form action="resultado.php" method="POST" id="formPesquisa">
                
                <div class="mb-4">
                    <label class="form-label d-block fw-bold">1 - Qual seu signo?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="signo" value="Áries" id="aries" required>
                        <label class="form-check-label" for="aries">Áries</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="signo" value="Touro" id="touro">
                        <label class="form-check-label" for="touro">Touro</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="signo" value="Gêmeos" id="gemeos">
                        <label class="form-check-label" for="gemeos">Gêmeos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="signo" value="Câncer" id="cancer">
                        <label class="form-check-label" for="cancer">Câncer</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label d-block fw-bold">2 - Escolha até duas características suas:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="caracteristicas[]" value="Otimista" id="c1">
                        <label class="form-check-label" for="c1">Otimista</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="caracteristicas[]" value="Pessimista" id="c2">
                        <label class="form-check-label" for="c2">Pessimista</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="caracteristicas[]" value="Realista" id="c3">
                        <label class="form-check-label" for="c3">Realista</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="caracteristicas[]" value="Instável" id="c4">
                        <label class="form-check-label" for="c4">Instável</label>
                    </div>
                    <small id="aviso" class="text-danger d-none">Por favor, selecione no máximo duas opções.</small>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar para Resultado</button>
            </form>
        </div>
    </div>
</div>

<script>
    const form = document.getElementById('formPesquisa');
    const checkboxes = document.querySelectorAll('input[name="caracteristicas[]"]');
    const aviso = document.getElementById('aviso');

    checkboxes.forEach(ck => {
        ck.addEventListener('change', () => {
            const selecionados = document.querySelectorAll('input[name="caracteristicas[]"]:checked');
            if (selecionados.length > 2) {
                ck.checked = false;
                aviso.classList.remove('d-none');
            } else {
                aviso.classList.add('d-none');
            }
        });
    });
</script>

</body>
</html>