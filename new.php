<?php
	include_once 'config.php';
	
?>

<?php
    $R_Fname=$_POST["regDetails1"];
    $R_Lname=$_POST["regDetails2"];
    $R_Email=$_POST["regDetails3"];
    $R_Cont=$_POST["regDetails4"];
    $R_pwd=$_POST["regDetails5"];
   

    $sql="insert into signup( Reg_ID, Reg_Firstname, Reg_Lastname, Reg_Email, Reg_contact, Reg_password) values( ' ', '$R_Fname','$R_Lname',' $R_Email','$R_Cont',' $R_pwd')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('your redistration successfully')</script>";
        header("location:Home.html");
    }

    else 
	{
		echo"<script>alert('Error in registration')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

?>