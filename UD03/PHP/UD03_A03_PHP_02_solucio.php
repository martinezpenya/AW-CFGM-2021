<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Exercici PHP 2 (resposta)</title>
    <!-- Utilitzarem un únic CSS per al formulari i la resposta, revisa el nom del teu css i canvia'l si ho necessites -->
    <link rel="stylesheet" type="text/CSS" href="UD03_A03_PHP_02_solucio.css" />
</head>

<body>
    <!-- Crea una tabla de 2 files i 2 columnes. Les dos cel·les de la primera fila estaran unides i contindran el text "Hola, tu eres:"
    En la següent fila, la primera cel·la contindrà els Cognoms i la segona el nom que hem obtés en l'anterior formulari -->
    <table>
        <tr>
            <td colspan=2>Hola, tu eres:</td>
        </tr>
        <tr>
            <td id="cognoms">
                <?php echo $_POST["cognoms"]; ?>
            </td>
            <td id="nom">
                <?php echo $_POST["nom"]; ?>
            </td>
        </tr>
    </table>
</body>

</html>