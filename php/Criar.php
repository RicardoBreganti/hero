<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/organiza.css">
    <title>Criar HERÓI</title>
</head>

<body>

    <section class="container" title="Criar">

        <div class="Criar">

            <form name="createhero" method="Post" action="../V1/API.php?apicall=createhero">

                CRIAR HERÓI<br><br>

                Name:
                <input type="text" name="name" maxlength="100" required>

                Real&nbsp;Name:
                <input type="text" name="realname" maxlength="100" required>

                Rating:
                <input type="text" name="rating" maxlength="2" required>

                Team Affiliation:
                <input type="text" name="teamaffiliation" maxlength="100" required>

                <br><br><input type="submit" value="Criar">

            </form>

        </div>

    </section>

</body>

</html>