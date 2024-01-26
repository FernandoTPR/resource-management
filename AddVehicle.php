<?php
	include_once 'config.php';
	
?>

<?php
    $id=$_POST["addId"];
    $addVehi=$_POST["addItem"];
    $addprice=$_POST["addprice"];
    

    $sql="insert into addvehicles(Vehicle_ID, Vehicle_name, Price_per_day) values('$id','$addVehi','$addprice')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Record Inserted successfully')</script>";
        header("location:Home.html");
    }

    else 
	{
		echo"<script>alert('Error in Insertion')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

    
?>