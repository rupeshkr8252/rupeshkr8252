<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cactus Plant</title>
<link rel = "stylesheet" type = "text/css" href = "cactus.css">
</head>
<body>

<head>
      <title>Product Name : Cactus Plant</title>
   </head>
   <h1>Product Name : Cactus Plant</h1>
	<h4>Product id : 03</h4>




 <body>
      <table border = "1">
         <tr>
            <td>A cactus is a member of the plant family Cactaceae, a family comprising about 127 genera with some 1750 known species of the order Caryophyllales. The word "cactus" derives, through Latin, from the Ancient Greek κάκτος, kaktos, a name originally used by Theophrastus for a spiny plant whose identity is now not certain.  </h4> 
 
 </td>
 
            
 <td></h4>
 
 
 
 
            </td>
         </tr>
         
      </table>
      
   </body>

<br>
<input type="hidden" name="mode" value="PinRequest" /> 
<label class="w3-text-green"><b>Choose price</b></label>
<select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
		<option value="" disabled selected>Choose your option</option>
		<option value="300">300</option>
		<option value="400">360</option>
		<option value="500">380</option>
		<option value="600">400</option>

</select>
<label><b>Total Amount after tax</b></label>
<input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>
<script>
function calculateAmount(val)
{ 
	var price = val * 1;
	/*display the result*/
	var tot_price=price+(price*0.18);
	var divobj = document.getElementById('tot_amount');
	divobj.value = tot_price;
}
</script>



<H2><button onclick="document.location='orderplacing.php'">Place order</button> </H2>






</body>
</html>