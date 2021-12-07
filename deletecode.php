<html>  
    <head>  
        <title>Delete Products</title>  
        <link rel="stylesheet" href="deletecode.css">
         
    </head>  
    <body>  
        <div id = "frm">  
            <h1>DELETE PRODUCTS</h1> <br>
            <form name="f1" action = "delete.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> Product ID: </label>  
                    <input type = "number_format" id ="id" name  = "id" />  
                </p>  
                
                <p>     
                    <input type =  "submit" id = "btn" value = "Delete" />  
                </p>  
            </form>  
        </div> 
		  </body>     
    </html>  