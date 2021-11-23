<!DOCTYPE html>
<html>

<head>
    <title>Desafio: Superlógica Tecnologias</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('keydown', '.numerico', function(e) {
                var keyCode = e.keyCode || e.which,
                    pattern = /\d/,
                    // Permite somente Backspace, Delete e as setas direita e esquerda, números do teclado numérico - 96 a 105 - (além dos números)
                    keys = [46, 8, 9, 37, 39, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105];

                if (!pattern.test(String.fromCharCode(keyCode)) && $.inArray(keyCode, keys) === -1) {
                    return false;
                }
            });
        });
    </script>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">.:: Desafio: Superlógica Tecnologias ::. </span>
            </a>
        </div>
    </header>
    <section class="container-xxl mt-3">