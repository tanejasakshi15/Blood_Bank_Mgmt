<?php
  $output=null;
 
    $min_length = 3;
    if(isset($_POST['submit']))
	{ 
       $mysqli= new mysqli("localhost","root","","mydb");
       $search= mysqli_real_escape_string($mysqli, $_POST['search']);
	   
	   $resultset= $mysqli->query("SELECT * FROM donors WHERE name LIKE '%$search%' ");
    	 if($resultset->num_rows>0)
		 {
			 while($rows=$resultset->fetch_assoc())
			{
				 $name=$rows['name'];
				 $gender=$rows['gender'];
				 $output .="Name:$name </br >   gender: $gender   <br/>"   ;
			 }
		 }
		 else{ 
            echo " NO results";
		}
	}
?>
<html>
<body>
<form action="searchDonors.php" method="POST">
    <input type="text" name="search" />
    <input type="submit" name="submit" value="Search" />
	
</form>
</body>
</html>


<?php
echo $output;
?>
