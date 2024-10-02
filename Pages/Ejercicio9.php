<?php
    include_once("../php/head.php");
?>

<div class="border border-primary  p-4 m-4">
    <header class="">
        <h2>Calcular el máximo común divisor</h2>
        <br>
    </header>
    <form method= "POST" action="" autocomplete="off" enctype="multipart/form-data" class="d-flex flex-column justify-content-around">
        <label>Ingrese un número:</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label>Ingrese otro número:</label>
        <input type="number" name="num2" id="num2">
        <br>
        <button type="submit" class="btn btn-success">Procesar</button>
        <br>
        <button class="btn btn-danger"><a href="../Index.php">Atras</a></button>

    </form>
    <br>

    <?php
        $num1 = "";
        $num2 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

        }
            if ($num1 == "" || $num2 == ""){
                echo("<div class='alert alert-danger'>
                        Por favor ingrese un número.
                    </div>");
                return;
            }
            else {
                $numAleatorio = generarNumeroAleatorio($num1, $num2);
                echo("<div class='alert alert-success'>
                    Tu numero aleatorio entre $num1 y $num2 es: <strong>$numAleatorio</strong>
                </div>");
            }
    ?>
</div>

<?php
    include_once("../php/foot.php");
?>