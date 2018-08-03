<?php
$con = mysqli_connect("localhost", "root", "", "mydb") or die("Error " . mysqli_error($con));

$a= mysqli_select_db($con, "mydb") ;  //or die(mysqli_error());
  
?>
<html>
<body>
<?php
     
    
     error_reporting(0);
    $min_length = 3;
    
     
    if(isset($_POST['query']))
	{ 
       $queryY = $_POST['query']; 
  
        $queryY = preg_replace("#[^0-9a-z]#i","",$query);
        
         
        $query = mysqli_query("SELECT * FROM donors WHERE name LIKE '%$queryY%' ") or die("fail");
  
         if(mysqli_num_rows($raw_results) > 0)  
	      {
		   echo "ok";
		  }
     
        else{ 
            echo "No results";
		    }
	}  
    else
	{ 
        echo "Minimum length is ".$min_length;
    }
	
	
?>

</body>

</html>
