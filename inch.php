<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Inch Plant</title>
<link rel = "stylesheet" type = "text/css" href = "inch.css">
</head>
<body>

<head>
      <title>Product Name : Inch Plant</title>
   </head>
   <h1>Product Name : Inch Plant</h1>
	<h4>Product id : 07</h4>




 <body>
      <table border = "1">
         <tr>
            <td> Inch plant care requires bright, indirect light. If the light is too dim, the distinctive leaf markings will fade. Keep the soil slightly moist, but don't water directly into the crown as this will cause an unsightly rot. Care should be taken, particularly in winter, that the plant doesn't become too dry. </h4> 
 
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
		<option value="400">320</option>
		<option value="500">360</option>
        <option value="500">400</option>
		
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