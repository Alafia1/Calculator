<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calc.php" method="get">
        <p>First Input: <input type="number" name="num1"></p>
        <label for="compute">Choose Mathematical Operator: </label>
        <select name="compute" id="compute">
          <option value="Add">+</option>
          <option value="subtract">-</option>
          <option value="Multiply">x</option>
          <option value="Divide">÷</option>
        </select>
        <p>Second Input: <input type="number" name="num2"></p>
        <p><input type="submit" value="Calculate"  /></p>
    </form>
    <?php
      switch ($_GET["compute"]) {
        case "Add":
          echo $_GET["num1"] + $_GET["num2"];
          break;
        case "subtract":
          echo $_GET["num1"] - $_GET["num2"];
          break;
        case "Multiply":
          echo $_GET["num1"] * $_GET["num2"];
          break;
        case "Divide":
          echo $_GET["num1"] / $_GET["num2"];
          break;
        default:
          echo "Please Enter First Number, Second Number and Mathematical Operator";
        }
    ?>

  </body>
</html>
