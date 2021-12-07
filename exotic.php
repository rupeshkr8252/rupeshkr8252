<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>



 <body style="background-color:grey;">

<head>
      <title>Product Name:Exotic Bouquet</title>
   </head>
   <h1>Product Name:Exotic Bouquet</h1>
	<h4>Product id:03</h4>




 <body>
      <table border = "1">
         <tr>
            <td> This is a stunning bouquet of 6 white asiatic lilies and 3 orange birds of paradises with white seasonal filler. It is beautifully decorated with white packing paper and an orange ribbon bow. The subtle fragrance and star-shaped blooms add celestial beauty to the celebrations.
    
 <h4>Product Contains:
Bouquet of 6 White Asiatic Lilies 
3 Orange Birds of Paradises and Seasonal Filler</h4>
 </td>



            </td>
         </tr>
         
      </table>
      


</tr>

    

</body>

<input type="hidden" name="mode" value="PinRequest" /> 
<label class="w3-text-green"><b>Choose price</b></label>
<select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
		<option value="" disabled selected>Choose your option</option>
		<option value="100">100</option>
		<option value="200">200</option>
		<option value="300">300</option>
		<option value="400">400</option>
		<option value="500">500</option>
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
</html>