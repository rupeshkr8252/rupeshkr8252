<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Areca Plant</title>
<link rel = "stylesheet" type = "text/css" href = "areca.css">
</head>
<body>

<body style="background-color:white;">
<head>
      <title>Product Name : ArecaPlant</title>
   </head>
   <h1>Product Name : Areca Plant</h1>
	<h4>Product id : 02</h4>




 <body>
      <table border = "1">
         <tr>
            <td> Areca is a genus of 51 species of palms in the family Arecaceae, found in humid tropical forests from the islands of the Philippines, Malaysia and India, across Southeast Asia to Melanesia.</h4> 
			
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
		<option value="400">400</option>
		<option value="500">430</option>
		<option value="600">460</option>
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