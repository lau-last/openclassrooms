<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="form.php" method="POST" enctype="multipart/form-data">
        <!-- Ajout des champs email et message -->
        [...]
        <!-- Ajout champ d'upload ! -->
        <div class="mb-3">
            <label for="screenshot" class="form-label">Votre capture d'écran</label>
            <input type="file" class="form-control" id="screenshot" name="screenshot"/>
        </div>
        <!-- Fin ajout du champ -->
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</body>
</html>