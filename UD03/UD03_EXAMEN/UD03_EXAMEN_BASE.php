<!DOCTYPE html>
<html>
<!-- Segueix les instruccions comentades per resoldre l'exercici -->
<!-- Quan apareix *CAMP elquesiga* fa referència a que has de mostrar el CAMP elquesiga que ve del formulari HTML fent servir echo de PHP -->
<!-- Utilitza un únic CSS per al HTML i el PHP (1 punt)-->
<!-- El present arxiu PHP conté errors, corregix i comenta (com més prop possible de l'error millor) tots aquells que trobes (2 punts)-->

<head>
    <meta charset="utf-8" />
    <!-- Afig un títol a la finestra del navegador que diga "Menú per al dia XXXX/XX/XX" on la data serà el camp "data" que ve del formularia HTML (1 punt)-->
    <title>Menú per al dia *CAMP data*</title>

<body>
    <!-- Completa/corregix per a que quede una taula amb 3 columnes, una fila de capçalera i 6 files normals per a que es veja com a les captures (6 punts)-->
    <table>
        <!--fila1-->
            <!-- canvia el td per altra etiqueta que denote que esta cel·la és de la capçalera, la fila1 sols té una columna (1 punt) -->
            <!-- carrega la image corresponent al menú segons el camp menu del formulari (1 punt) -->
            <td background="img/*CAMP menu*.jpg"> 
                <!-- Fes un salt de linea després de "Restaurant" per a que quede com en les captures (1 punt)-->
                <h1 class="capcalera">Restaurant "El bon informàtic"</h1>
                <!-- Hi ha dos maneres de fer la següent linea, amb un sol php d'inici i final i concatenant els camps (5 punts) o obrir i tancar php per a cada camp (3 punts)-->
                <h3 class="capcalera"> *CAMP menu* *CAMP data* *salt de linea* des de les *CAMP hora_inici* fins les *CAMP hora_fi* </h3>
            </td>
        <!--fila2-->
            <!--Una única columna dins de la fila2 -->
                <h2>1r Plat</h2>
                <!-- Utilitza una llista desordenada per a mostrar les opcions del primer plat (3 punts)-->
                *CAMP opcio1_1*
                *CAMP opcio1_2*
        <!--fila3-->
            <!--Una única columna dins de la fila3 -->
                <h2>2n Plat</h2>
                <!-- Utilitza una llista desordenada per a mostrar les opcions del primer plat (3 punts)-->
                *CAMP opcio2_1*
                *CAMP opcio2_2*
        <!--fila4-->
            <!--Una única columna dins de la fila4 -->
                <!-- Afig el que necessites per a aplicar el CSS solament al preu en € del menú (2 punts)-->
                <h2>Preu *CAMP preu* IVA inclòs</h2>
        <!--fila5-->
            <!--Una única columna dins de la fila5 -->
                <!--Emfatitza les "Notes:" i el *CAMP notes* per a que apareguen en cursiva (2 punt) -->            
                Notes: *CAMP notes*
        <!-- Falta assignar un selector d'id o de classe a la fila d'acord amb el CSS per a donar format al peu (1 punt)-->
        <!--fila6>-->
            <!--Tres columnes dins de la fila6-->
            Adreça:
            Telèfon:
            Web:
        <!-- Falta assignar un selector d'id o de classe d'acord amb el CSS (1 punt)-->
        <!--fila7-->
            <!--Tres columnes dins de la fila7 -->
            C/Calvari S/N (Catadau)
            962980140
            <!-- afig un enllaç a la web de l'institut (1 punt)-->
            https://mestreacasa.gva.es/web/4602325000


<!-- Falten etiquetes de tancament -->

<!-- TOTAL 31 punts -->