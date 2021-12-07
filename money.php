<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Money Plant</title>
<link rel = "stylesheet" type = "text/css" href = "money.css">
</head>
<body>

<head>
      <title>Product Name : Money Plant</title>
   </head>
   <h1>Product Name : Money Plant</h1>
	<h4>Product id : 10</h4>




 <body>
      <table border = "1">
         <tr>
            <td> Money plant may refer to several species, including Epipremnum aureum, Hydrocotyle vulgaris, Lunaria , Crassula ovata, Pachira aquatica.
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
		<option value="900">900</option>
        <option value="800">950</option>
        <option value="800">960</option>
		
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