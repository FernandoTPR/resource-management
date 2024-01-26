<?php
	include_once'config.php';
	
?>

<?php
    $Pdate=$_POST["data1"];
    $Ptime=$_POST["data2"];
    $Rdate=$_POST["data3"];
    $Rtime=$_POST["data4"];
    $VType=$_POST["data5"];
    $NoOfpsngr=$_POST["data6"];
    $bMsg=$_POST["data7"];
    $from=$_POST["data8"];
    $to=$_POST["data9"];

    $sql="insert into booking(BookingID, PickupDate, PickupTime, ReturnDate, ReturnTime, Vehicle, NoOfPassengers, bookMassage,locFrom, locTo) values('', '$Pdate','$Ptime',' $Rdate','$Rtime','$VType','$NoOfpsngr','$bMsg','$from','$to')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Record Inserted successfully')</script>";
		header("location:Payment.php");
    }

    else 
	{
		echo"<script>alert('Error in Insertion')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

?>