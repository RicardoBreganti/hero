<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/organiza.css">
    <title>Deletar HERÓI</title>
</head>

<body>

    <section class="container" title="Deletar">

        <div class="Deletar">

            <form name="deletehero" method="GET" action="../V1/API.php">

                DELETAR HERÓI<br><br>

                ID:&nbsp;&nbsp;&nbsp;
                <input type="hidden" value="deletehero" name="apicall">
                <input type="text" name="id" maxlength="4" required>

                <br><br><input type="submit" value="Deletar">

            </form>

        </div>

    </section>

</body>

</html>