<html>
<title>Profit and Loss - Simple calculator</title>
<head>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//for allowing only integers in our forms.
</script>
</head>
<body>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<fieldset>
<tr>
<label for="CP">Cost Price</label></div></td>
<td><input name="CP" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<label for="SP">Selling Price</label></div></td>
<td><input name="SP" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<input type="submit" name="submit" value="Calculate!" />
</tr>
</fieldset>
</form>
</html> 
<?php
require_once 'class.calc.php';

$calc = new Calc();

if(isset($_POST['submit'])){
$numOne = $_POST['CP'];
$numTwo = $_POST['SP'];

if(empty($numOne) or empty($numTwo)){
die('Field cannot be empty');
}

if ($numOne === $numTwo) { 
echo 'Therefore, as your selling price and the cost price is the same; you have earned no profit nor loss.';
echo "<br>";
echo 'Profit' . ' = ' .  $calc->sub($numOne, $numTwo) . "\n"; // we will now minus the inputs as per the formula
echo 'Loss' . ' = ' .  $calc->sub($numTwo, $numOne) . "\n"; // we will now minus the inputs as per the formula
}

if($numOne > $numTwo) {
echo 'Therefore, as your cost price is higher than the selling price; there is a loss.';
echo "<br>";
echo ' Loss ' . ' = ' .  "\n" . $calc->sub($numOne, $numTwo); // we will now minus the inputs as per the formula
$losspercent = ($numOne - $numTwo);
echo ' Loss Percentage ' . ' = ' . round(($losspercent / $numOne) * 100, 2) . '%'; //we will now find out the percentage; loss/total cost * 100 as per the formula and round up any decimal numbers to 2 decimal places.
}

if($numTwo > $numOne) {
echo 'Therefore, as your selling price is higher than the cost price; there is a profit.';
echo "<br>";
echo 'Profit' . ' = ' . "\n" . $calc->sub($numTwo, $numOne); // we will now minus the inputs as per the formula
$profitpercent = ($numTwo - $numOne);
echo ' Profit Percentage ' . ' = ' . round(($profitpercent / $numOne) * 100, 2) . '%'; //we will now find out the percentage; profit/total cost * 100 as per the formula and round up any decimal numbers 2 decimal places.
}

} 
?>
