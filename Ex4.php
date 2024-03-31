<!DOCTYPE html>
<html>
<head>
    <title>Equation de 2eme degre</title>
</head>
<body>
    <h3> Equation de 2eme degre</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $D = pow($b,2) - 4*$a*$c;
        if ($D > 0) {
            $x1 = (-$b + sqrt($D)) / (2*$a);
            $x2 = (-$b - sqrt($D)) / (2*$a);
            echo "Les solutions de l'equation", $a," x^2 +",($b),"x +",($c)," sont les suivantes: x1 = $x1 et x2 = $x2";
        } elseif ($D == 0) {
            $x = -$b / (2*$a);
            echo "L'equation:", $a," x^2 +",($b),"x +",($c)," a une seule solution double : x = $x";
        } else {
            echo "L'equation:", $a," x^2 +",($b),"x +",($c)," n'a pas de solution reelle.";
        }
    } else {
    ?>
    <form method="post">
        <label for="a">Coeff a :</label>
        <input type="number" name="a" required><br><br>
        
        <label for="b">Coeff b :</label>
        <input type="number"  name="b"required><br><br>
        
        <label for="c">Coeff c :</label>
        <input type="number" name="c" required><br><br>
        
        <input type="submit" value="Solution">
    </form>
    <?php
    }
    ?>
</body>
</html>
