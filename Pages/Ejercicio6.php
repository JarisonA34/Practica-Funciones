<?php
    include_once("../php/head.php");
?>

<div class="border border-primary  p-4 m-4">
    <header class="">
        <h2>Generar contraseñas aleatorias</h2>
        <br>
    </header>
    <form method= "POST" action="" autocomplete="off" enctype="multipart/form-data" class="d-flex flex-column justify-content-around">
        <label>Ingrese un número:</label>
        <input type="number" name="num" id="num">
        <br>
        <button type="submit" class="btn btn-success">Procesar</button>
        <br>
        <button class="btn btn-danger"><a href="../Index.php">Atras</a></button>

    </form>
    <br>

    <?php
        $num = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["num"];
        }
            if ($num == ""){
                echo("<div class='alert alert-danger'>
                        Por favor ingrese un número.
                    </div>");
                return;
            }
            else {
                if (esPrimo($num)) {
                    echo("<div class='alert alert-success'>
                            El numero <strong>$num</strong>, es primo.
                        </div>");
                } else {
                    echo("<div class='alert alert-danger'>
                            El numero <strong>$num</strong>, no es primo.
                        </div>");
                }
            }
    ?>
</div>

<?php
    include_once("../php/foot.php");
?>