<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $number = $_POST['number'];   
        
        if($number>0)
		{  
            echo "$number is an Possetive Number";  
        }
		else if($number<0)
		{  
            echo "$number is Negetive number";  
        }  
		else
		{  
            echo "$number is Zero";  
        } 
    }  
?>  