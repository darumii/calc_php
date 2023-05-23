<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Calculadora Simples</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $resultado = 0;

        switch ($operator) {
            case "+":
                $resultado = $num1 + $num2;
                break;
            case "-":
                $resultado = $num1 - $num2;
                break;
            case "*":
                $resultado = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "Erro: Divisão por zero não é permitida.";
                }
                break;
            default:
                echo "Operação inválida.";
                break;
        }

        echo "<h3>Resultado: " . $resultado . "</h3>";
    }
    ?>

</body>
</html>
