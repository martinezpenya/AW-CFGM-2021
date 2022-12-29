<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Exercici PHP 3 (resposta)</title>
    <link rel="stylesheet" type="text/CSS" href="UD03_A03_PHP_03_solucio.css" />
</head>

<body>
    <table>
        <tr>
            <td colspan=3>Hola, tu eres:</td>
        </tr>
        <tr>
            <td id="cognoms">
                <?php echo $_GET["cognoms"]; ?>
            </td>
            <td id="nom">
                <?php echo $_GET["nom"]; ?>
            </td>
            <td id="telefon">
                <?php echo $_GET["telefon"]; ?>
            </td>
        </tr>
    </table>
</body>
</html>