<?php
    include_once("../php/head.php");
?>

<div class="border border-primary  p-4 m-4">
    <header class="">
        <h2>Conversor de Celsius a Fahrenheit</h2>
        <br>
    </header>
    <form method= "POST" action="" autocomplete="off" enctype="multipart/form-data" class="d-flex flex-column justify-content-around">
        <label>Ingrese la temperatura a convertir:</label>
        <input type="number" name="temp" id="temp">
        <br>
        <button type="submit" class="btn btn-success">Calcular</button>
        <br>
        <button class="btn btn-danger"><a href="../Index.php">Atras</a></button>
    </form>
    <br>

    <?php
    $temp = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $temp = $_POST["temp"];
    }
        if ($temp == ""){
            echo("<div class='alert alert-danger'>
                     Por favor ingrese una temperatura.
                </div>");
            return;
        }
        else{
            $conversion = celsiusAFahrenheit($temp);
            echo("<div class='alert alert-success'>
                    El resultado de la conversion es: <strong>$conversion</strong>
                </div>");
        }
    ?>

</div>

<?php
    include_once("../php/foot.php");
?>