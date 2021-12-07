<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Embryophyta Plant</title>
<link rel = "stylesheet" type = "text/css" href = "emb.css">
</head>
<body>

<body style="background-color:white;">
<head>
      <title>Product Name : Embryophyta Plant</title>
   </head>
   <h1>Product Name : Embryophyta Plant</h1>
	<h4>Product id : 05</h4>




 <body>
      <table border = "1">
         <tr>
            <td> The Embryophyta are informally called land plants because they live primarily in terrestrial habitats, while the related green algae are primarily aquatic. Embryophytes are complex multicellular eukaryotes with specialized reproductive organs.</h4> 
 
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
		<option value="600">470</option>
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