<?php
	include_once 'config.php';
	
?>

<?php
    $fname=$_POST["contactdata1"];
    $lname=$_POST["contactdata2"];
    $C_Email=$_POST["contactdata3"];
    $C_Phone=$_POST["contactdata4"];
    $C_msg=$_POST["contactdata5"];

    $sql="insert into Contact_Us(First_name, Second_name, Contact_email, Contact_phone, Contact_massage) values('$fname', '$lname','$C_Email','$C_msg')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Record Inserted successfully')</script>";
    }

    else 
	{
		echo"<script>alert('Error in Insertion')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

?>