<?php
    include_once("../php/head.php");
?>

<div class="border border-primary  p-4 m-4">
    <header class="">
        <h2>Generar contraseñas aleatorias</h2>
        <br>
    </header>
    <form method= "POST" action="" autocomplete="off" enctype="multipart/form-data" class="d-flex flex-column justify-content-around">
        <label>Ingrese la longitud de su contraseña:</label>
        <input type="number" name="longitud" id="longitud">
        <br>
        <button type="submit" class="btn btn-success">Procesar</button>
        <br>
        <button class="btn btn-danger"><a href="../Index.php">Atras</a></button>

    </form>
    <br>

    <?php
        $longitud = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $longitud = $_POST["longitud"];
        }
            if ($longitud == ""){
                echo("<div class='alert alert-danger'>
                        Por favor ingrese un numero.
                    </div>");
                return;
            }
            else {
                $contraseña = generarPassword($longitud);
                echo("<div class='alert alert-success'>
                        Contaseña generada: <strong>$contraseña</strong>
                    </div>");
            }
    ?>
</div>

<?php
    include_once("../php/foot.php");
?>