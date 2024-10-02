<?php
    include_once("../php/head.php");
?>

<div class="border border-primary  p-4 m-4">
    <header class="">
        <h2>Invertir una cadena</h2>
        <br>
    </header>
    <form method= "POST" action="" autocomplete="off" enctype="multipart/form-data" class="d-flex flex-column justify-content-around">
        <label>Ingrese un texto:</label>
        <input type="text" name="texto" id="texto">
        <br>
        <button type="submit" class="btn btn-success">Procesar</button>
        <br>
        <button class="btn btn-danger"><a href="../Index.php">Atras</a></button>

    </form>
    <br>

    <?php
        $texto = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $texto = $_POST["texto"];
        }
            if ($texto == ""){
                echo("<div class='alert alert-danger'>
                        Por favor ingrese texto.
                    </div>");
                return;
            }
            else {
                $inverso = invertirCadena($texto);
                echo("<div class='alert alert-success'>
                        El texto invertido es: <strong>$inverso</strong>
                      </div>");
            }
    ?>
</div>

<?php
    include_once("../php/foot.php");
?>