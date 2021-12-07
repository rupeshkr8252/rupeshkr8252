<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel = "stylesheet" type = "text/css" href = "daisy.css">
<title>Daisy Plant</title>
</head>
<body>


<head>
      <title>Product Name : Daisy Plant</title>
   </head>
   <h1>Product Name : Daisy Plant</h1>
	<h4>Product id : 04</h4>




 <body>
      <table border = "1">
         <tr>
            <td>A European native, Shasta daisies are now naturalized throughout North America. Like clockwork, these daisies return every spring or early summer and bloom until early fall.
            </h4> 
 
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
		<option value="600">600</option>
		<option value="700">650</option>
		<option value="800">680</option>
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