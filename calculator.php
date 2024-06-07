<html>
  <head>
    <title>Multipurpose Calculator</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body bgcolor=red>
    <h1>Multipurpose Calculator</h1>
    <form method="post">
      <label for="num1">Number 1:</label>
      <input type="number" step="0.01" id="num1" name="num1"><br><br>
      <label for="num2">Number 2:</label>
      <input type="number" step="0.01" id="num2" name="num2"><br><br>
      <label for="operation">Operation:</label>
      <select id="operation" name="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
        <option value="exponent">Exponentiation</option>
        <option value="percentage">%</option>
        <option value="square_root">Square Root</option>
        <option value="logarithm">Log</option>
      </select><br><br>
      <input type="submit" value="Calculate">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST["operation"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        switch ($operation) {
          case "add":
            $result = $num1 + $num2;
            break;
          case "subtract":
            $result = $num1 - $num2;
            break;
          case "multiply":
            $result = $num1 * $num2;
            break;
          case "divide":
            if ($num2 == 0) {
              $result = "Division by zero is not allowed";
            } else {
              $result = $num1 / $num2;
            }
            break;
          case "exponent":
            $result = pow($num1, $num2);
            break;
          case "percentage":
            $result = ($num1 / $num2) * 100;
            break;
          case "square_root":
            $result = sqrt($num1);
            break;
          case "logarithm":
            $result = log($num1);
            break;
          default:
            $result = "Invalid operation";
        }

        echo "$num1 $operation $num2 =". $result;
      }
   ?>
  </body>
</html>