<?php
	include_once 'config.php';
	
?>

<?php
    $credit=$_POST["pd1"];
    $dibet=$_POST["pd2"];
    $C_num=$_POST["pd3"];
    $Ex_date=$_POST["pd4"];
    $CH_name=$_POST["pd5"];
    $cvv=$_POST["pd6"];

    $sql="insert into Payment(Pay_ID, Credit, Debet, Card_num, Expire_date, Card_holder, CVV) values('', '$credit','$dibet',' $C_name',' $Ex_date',' $CH_num','$cvv')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('Record Inserted successfully')</script>";
		header("location:Conformation.html");
    }

    else 
	{
		echo"<script>alert('Error in Insertion')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

?>