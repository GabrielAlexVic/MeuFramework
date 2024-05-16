<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Framework</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="text-center text-white bg-dark">

    <main class="vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="cover-heading">Home</h1>
        <p class="lead">Preencha seu nome</p>
        <input type="text" class="form-control" id="nomeInput" name="hello" style="width: 15%;">
        <a id="linkHello" class="btn btn-light mt-4" href="#">Hello</a>
        <a id="linkHello" class="btn btn-light mt-4" href="bye">GoodBye!</a>
    </main>

    <script>
        var inputNome = document.getElementById('nomeInput');
        var linkHello = document.getElementById('linkHello');

        linkHello.addEventListener('click', function() {
            var nome = inputNome.value;
            linkHello.setAttribute('href', 'hello/' + encodeURIComponent(nome));
        });
    </script>

</body>
</html>