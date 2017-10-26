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

$costprice = $_POST["CP"]; 
$sellingprice = $_POST["SP"]; 

//time for the calculation:

//first check if the form is empty or not.

if(empty($costprice) || empty($sellingprice)) {
die("Please provide a valid integer");
}

//check if they are equal to each other
if ($costprice === $sellingprice) { 
echo 'Therefore, as your selling price and the cost price is the same; you have earned no profit nor loss.';
echo "<br>";
echo 'Profit' . ' = ' . ($sellingprice - $costprice) . "\n"; // we will now minus the inputs as per the formula
echo 'Loss' . ' = ' . ($sellingprice - $costprice) . "\n"; // we will now minus the inputs as per the formula
}

//for the CP = Loss
if($costprice > $sellingprice) {
echo 'Therefore, as your cost price is higher than the selling price; there is a loss.';
echo "<br>";
echo ' Loss ' . ' = ' . ($costprice - $sellingprice) . "\n"; // we will now minus the inputs as per the formula
$losspercent = ($costprice - $sellingprice);
echo ' Loss Percentage ' . ' = ' . round(($losspercent / $costprice) * 100, 2) . '%'; //we will now find out the percentage; loss/total cost * 100 as per the formula and round up any decimal numbers to 2 decimal places.
}

//for the SP = profit
if($sellingprice > $costprice) {
echo 'Therefore, as your selling price is higher than the cost price; there is a profit.';
echo "<br>";
echo 'Profit' . ' = ' . ($sellingprice - $costprice) . "\n"; // we will now minus the inputs as per the formula
$profitpercent = ($sellingprice - $costprice);
echo ' Profit Percentage ' . ' = ' . round(($profitpercent / $costprice) * 100, 2) . '%'; //we will now find out the percentage; profit/total cost * 100 as per the formula and round up any decimal numbers 2 decimal places.
}
?>
