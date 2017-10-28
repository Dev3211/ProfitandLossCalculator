<html>
<title>Profit and Loss - Advanced calculator</title>
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
<label for="Profit">Profit</label></div></td>
<td><input name="PROFIT" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<label for="Loss">Loss</label></div></td>
<td><input name="LOSS" type="text" class="input" size="25" onkeypress="return isNumberKey(event)" /> 
</tr>
<tr>
<input type="submit" name="submit" value="Calculate!" />
</tr>
</fieldset>
</form>
</html> 
<?php
if (isset($_POST['submit'])) {
$costprice = $_POST["CP"]; 
$sellingprice = $_POST["SP"]; 
$profit = $_POST["PROFIT"]; 
$loss = $_POST["LOSS"]; 

//if the cost price is empty
if(!$costprice) {
echo ' Let the C.P be ' . ' = ' . ' X ' . ' or ' . ' 100 ';
echo "<br>";
echo ' Therefore, S.P = X + profit of X';
echo "<br>";
$lel = (100 + $profit);
$woop = round(($sellingprice * 100) / $lel, 2);
echo ' Therefore, the C.P ' . ' = ' . $woop;
echo "<br>";
echo "<h3>Or for loss(Only if you have given the loss)</h3>";
echo ' Let the C.P be ' . ' = ' . ' X ' . ' or ' . ' 100 ';
echo "<br>";
echo ' Therefore, S.P = X - loss of X';
echo "<br>";
$lel1 = (100 - $loss);
$woop1 = round(($sellingprice * 100) / $lel1, 2);
echo ' Therefore, the C.P ' . ' = ' . $woop1;
}

//if the selling price is empty
if(!$sellingprice) {
echo ' Given, cost price ' . ' = ' . $costprice;
echo "<br>";
echo ' Therefore, profit' . ' = ' . ' profit% of C.P ';
echo "<br>";
$kek = round(($profit / 100 * $costprice), 2);
$ok = ($costprice + $kek);
echo "<br>";
echo ' Therefore, the S.P ' . ' = ' . $ok;
echo "<br>";
echo "<h3>Or for loss(Only if you have given the loss)</h3>";
echo ' Given, cost price ' . ' = ' . $costprice;
echo "<br>";
echo ' Therefore, loss' . ' = ' . ' profit% of C.P ';
echo "<br>";
$kek = round(($loss / 100 * $costprice), 2);
$ok = ($costprice - $kek);
echo "<br>";
echo ' Therefore, the S.P ' . ' = ' . $ok;
}

}
?>
