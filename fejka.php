<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>FEJKA Plant</title>
<link rel = "stylesheet" type = "text/css" href = "fejka.css">
</head>
<body>

<head>
      <title>Product Name : FEJKA Plant</title>
   </head>
   <h1>Product Name : FEJKA Plant</h1>
	<h4>Product id : 06</h4>




 <body>
      <table border = "1">
         <tr>
            <td> FEJKA artificial potted plants that don’t require a green thumb. Perfect when you have better things to do than water plants and tidy up dead leaves. You’ll have everyone fooled because they look so lifelike.</h4> 
 
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
		<option value="800">710</option>
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