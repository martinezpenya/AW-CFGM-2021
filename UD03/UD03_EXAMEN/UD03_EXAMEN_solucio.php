<!DOCTYPE html>
<html>
<!-- Segueix les instruccions comentades per resoldre l'exercici -->
<!-- Quan apareix *CAMP elquesiga* fa referència a que has de mostrar el CAMP elquesiga que ve del formulari HTML fent servir echo de PHP -->
<!-- Utilitza un únic CSS per al HTML i el PHP (1 punt)-->
<!-- El present arxiu PHP conté errors, corregix i comenta (com més prop possible de l'error millor) tots aquells que trobes (2 punts)-->

<head>
    <meta charset="utf-8" />
    <!-- Afig un títol a la finestra del navegador que diga "Menú per al dia XXXX/XX/XX" on la data serà el camp "data" que ve del formularia HTML (1 punt)-->
    <title>Menú per al dia <?php echo $_GET["data"] ?></title>
    <link rel="stylesheet" type="text/CSS" href="UD03_EXAMEN_solucio.css" />
<!--Falta el tancament del head-->
</head>

<body>
    <!-- Completa/corregix per a que quede una taula amb 3 columnes, una fila de capçalera i 6 files normals per a que es veja com a les captures (6 punts)-->
    <table>
        <!--fila1-->
        <tr>
            <!-- canvia el td per altra etiqueta que denote que esta cel·la és de la capçalera, la fila1 sols té una columna (1 punts) -->
            <!-- carrega la image de fons corresponent al menú segons el camp menu del formulari (1 punt) -->
            <th colspan="3" background="img/<?php echo $_GET["menu"] ?>.jpg">
                <!-- Fes un salt de linea després de "Restaurant" per a que quede com en les captures (1 punt)-->
                <h1 class="capcalera">Restaurant<br>"El bon informàtic"</h1>
                <!-- Hi ha dos maneres de fer la següent linea, amb un sol php d'inici i final i concatenant els camps (5 punts) o obrir i tancar php per a cada camp (3 punts)-->
                <!-- 5 punts --><h3 class="capcalera"><?php echo $_GET["menu"] . " " . $_GET["data"] . "<br> des de les " . $_GET["hora_inici"] . " fins les " . $_GET["hora_fi"] ?> </h3>              
                <!-- 3 punts --><!-- <h3 class="capcalera"><?php echo $_GET["menu"] ?> <?php echo $_GET["data"] ?><br> des de les <?php echo $_GET["hora_inici"] ?> fins les <?php echo $_GET["hora_fi"] ?> </h3> -->
            </th>
        </tr>
        <tr>
        <!--fila2-->
            <!--Una única columna dins de la fila2 -->
            <td colspan="3">
                <h2>1r Plat</h2>
                <!-- Utilitza una llista desordenada per a mostrar les opcions del primer plat (3 punts)-->
                <ul>
                    <li><?php echo $_GET["opcio1_1"] ?></li>
                    <li><?php echo $_GET["opcio1_2"] ?></li>
                </ul>
            </td>
        </tr>
        <tr>
        <!--fila3-->
            <!--Una única columna dins de la fila3 -->            
            <td colspan="3">
                <h2>2n Plat</h2>
                <!-- Utilitza una llista desordenada per a mostrar les opcions del primer plat (3 punts)-->
                <ul>
                    <li><?php echo $_GET["opcio2_1"] ?></li>
                    <li><?php echo $_GET["opcio2_2"] ?></li>
                </ul>
            </td>
        </tr>
        <tr>
        <!--fila4-->
            <!--Una única columna dins de la fila4 -->
            <td colspan="3">
                <!-- Afig el que necessites per a aplicar el CSS solament al preu en € del menú (2 punts)-->            
                <h2>Preu <span id="preu"><?php echo $_GET["preu"] ?></span> IVA inclòs</h2>
            </td>
        </tr>
        <tr>
        <!--fila5-->
            <!--Una única columna dins de la fila5 -->
            <td colspan="3">
                <!--Emfatitza les "Notes:" i el *CAMP notes* per a que apareguen en cursiva (2 punt) -->            
                <em>Notes: <?php echo $_GET["comentari"] ?></em>
            </td>
        </tr>
        <!-- Falta assignar un selector d'id o de classe a la fila d'acord amb el CSS per a donar format al peu (1 punt)-->
        <tr class="peu">
        <!--fila6>-->
            <!--Tres columnes dins de la fila6-->           
            <td>
                Adreça:
            </td>
            <td>
                Telèfon:
            </td>
            <td>
                Web:
            </td>
        </tr>
        <!-- Falta assignar un selector d'id o de classe a la fila d'acord amb el CSS per a donar format al peu (1 punt)-->
        <tr class="peu">
        <!--fila7-->
            <!--Tres columnes dins de la fila7 -->            
            <td>
                C/Calvari S/N (Catadau)
            </td>
            <td>
                962980140
            </td>
            <td>
                <!-- afig un enllaç a la web de l'institut (1 punt)-->
                <a href="https://mestreacasa.gva.es/web/4602325000">https://mestreacasa.gva.es/web/4602325000</a>
            </td>
        </tr>
<!-- Falten etiquetes de tancament -->
    </table>
</body>

</html>

<!-- TOTAL 31 punts -->