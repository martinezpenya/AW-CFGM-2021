<!DOCTYPE html>
<html>
<!-- Segueix les instruccions comentades per resoldre l'exercici -->
<head>
    <meta charset="utf-8" />
    <title>Curriculum Vitae</title>
    <!-- inclou la linea que falta per a fer referència al CSS -->
    <link rel="stylesheet" type="text/CSS" href="UD03_A03_PHP_04_solucio.css" />
</head>

<body>
    <h1>CURRICULUM VITAE</h1>
    <table>
        <tr>
            <td>Nom i cognoms:</td>
            <td>
                <?php echo $_POST["nom"]." ".$_POST["cognoms"]; ?>
            </td>
            <!--
                1.- Assigna un selector a esta (i sols esta) etiqueta <td> segons l'estil que poses al CSS i de manera la cel·la s'alinie a la dreta.
                2.- Fes que 'combine' les 4 files de la taula per a deixar espai a la foto
                3.- Inclou la etiqueta per a mostrar la imatge foto.jpg amb una amplaria de 100 pixels 
            -->
            <td id="foto" rowspan=4><img src="foto.jpg" width=100px/></td>
        </tr>
        <tr>
            <td>Adreça postal:</td>
            <td>
                <!-- Inclou el codi PHP necessàri per a mostrar les dades corresponents del formulari-->
                <?php echo $_POST["adreca"]; ?>
            </td>
        </tr>
        <tr>
            <td>E-correu:</td>
            <td>
                <!-- Inclou el codi PHP necessàri per a mostrar les dades corresponents del formulari-->
                <?php echo $_POST["email"]; ?>
            </td>
        </tr>
        <tr>
            <td>Data naixement:</td>
            <td>
                <!-- Inclou el codi PHP necessàri per a mostrar les dades corresponents del formulari-->
                <?php echo $_POST["naixement"]; ?>
            </td>
        </tr>
    </table>
    <h2>Formació Reglada</h2>
    <!-- Afig les etiquetes span que necessites i assigna-los el css corresponent segons l'exemple de l'enunciat -->
    <!-- Afig les etiquetes necessàries per a una llista com la del exemple -->
    <ul>
        <li><span class=any>2019-2021</span> Cicle Formatiu Grau mitjà "Sistemes microinformàtics en Xarxa". <span class="nom">IES Mestre Ramon Esteve</span></li>
        <li><span class=any>2014-2019</span> ESO <span class="nom">IES Mestre Ramon Esteve</span></li>
    </ul>
    <h2>Idiomes</h2>
    <!-- Afig les etiquetes span que necessites i assigna-los el css corresponent segons l'exemple de l'enunciat -->
    <!-- Afig les etiquetes necessàries per a una llista com la del exemple -->
    <ol>
        <li><span class=idioma>Castella</span> Alt</li>
        <li><span class=idioma>Valencià</span> Mitjà</li>
        <li><span class=idioma>Anglès</span> Baix</li>
    </ol>

</body>

</html>