<?php
	include_once 'config.php';
	
?>

<html>
    <head>
        <title> page</title>
        <link rel="stylesheet" href="CSS/admindashbordStyle.css">
    </head>
    <body>
    <table class="tbl1">
        <tr>
          <th><img class="im1" src="images/logo.png" alt="Logo" height="200" width="200"></th>
          <th class="th1">Car Rental Service</th>
          <th>
            <ul style="text-align:center; background:transparent">
              <li><img style="text-align: center;" src="images/userlogo.png" alt="User account photo" width="60px" height="60px"></li>
              <li><div>
                    <button class="btn1" >Login</button>
                 </div>
                    
              </li>
            </ul>
          </th>
        </tr>
    </table>
    
    <!--Navigation bar-->
    <div style="background-color:white">
    <center>
        <h2 style="text-decoration:underline">Admin Dashbord</h2>
    

      <!--php-->
      
      <h2 style="text-align:center">booking details</h2>
        <?php
            $sql="select * from booking";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>BookID</td><td>Pickup date</td><td>Pickup time</td><td>Return date</td><td>Retun time</td><td>Vehicle</td><td>Noofpassengers</td><td>Massage</td><td>From</td><td>To</td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["BookingID"]."</td><td>".$row["PickupDate"]."</td><td>".$row["PickupTime"]."</td><td>".$row["ReturnDate"]."</td><td>".$row["ReturnTime"]."</td><td>".$row["Vehicle"]."</td><td>".$row["NoOfPassengers"]."</td><td>".$row["bookMassage"]."</td><td>".$row["locFrom"]."</td><td>".$row["locTo"]."</td></tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }

            echo"</table>";

           
           

        ?>
        



        <!--payment details-->
        <hr>
        </center>
    </div>

    <center>
        <h2 style="text-align:center">payment details<h2>
        <?php
            $sql="select * from payment";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>Payment No</td><td>credit card</td><td>Debet card</td><td>Card Number</td><td>Expire date</td><td>Card Holder name</td><td>CVV number</td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["Pay_ID"]."</td><td>".$row["Credit"]."</td><td>".$row["Debet"]."</td><td>".$row["Card_num"]."</td><td>".$row["Expire_date"]."</td><td>".$row["Card_holder"]."</td><td>".$row["CVV"]."</td></tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }

            echo"</table>";


        ?>
        </center>

        <!--Contact us details-->
        <center>
        <h2 style="text-align:center">Contact us<h2>
        <?php
            $sql="select * from Contact_Us";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>First name</td><td>Second name</td><td>Contact email</td><td>phone</td><td>Expire date</td><td>Contact massage</td><td>CVV </td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["First_name"]."</td><td>".$row["Second_name"]."</td><td>".$row["Contact_email"]."</td><td>".$row["Expire date"]."</td><td>".$row["Contact_massage"]."</td><td>".$row["CVV number"]."</td></tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }
            

            echo"</table>";
        ?>
        </center>

        <!--Registation details-->
        <center>
        <h2 style="text-align:center">Registation Details<h2>
        <?php
            $sql="select * from signup";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>Registation ID</td><td>First Name</td><td>Last Name</td><td>E mail</td><td>Contact</td><td>Password</td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["Reg_ID"]."</td><td>".$row["Reg_Firstname"]."</td><td>".$row["Reg_Lastname"]."</td><td>".$row["Reg_Email"]."</td><td>".$row["Reg_contact"]."</td><td>".$row["Reg_password"]."</td></tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }
            

            echo"</table>";
        ?>
        </center>
        

      

        <!--Vehicle packages details-->
        <center>
        <h2>Vehicle Packages</h2>
        <?php
            $sql="select * from addvehicles";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>Car ID</td><td>Vehicle</td><td>Price</td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["Vehicle_ID"]."</td><td>".$row["Vehicle_name"]."</td><td>".$row["Price_per_day"]."</td></tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }

            echo"</table>";

            //close the connection
            mysqli_close($conn);

        ?>
        </center>


         <!--Addvehicle-->
         <center>
         <h2 style="text-align:center">Add Vehicles Packages</h2>
        <div>
            <form action="AddVehicle.php" method="POST">
                Car Id:<br>
                <input type="text" name="addId"><br><br>
                vehicle:<br>
                <input type="text" name="addItem" ><br><br>
                Price:<br>
                <input type="text" name="addprice"><br>
                <input type="submit" name="submit">
            </form>
        </div>
        </center>
    </body>

    <hr>
    <footer style="background-color:rgb(121, 16, 16); height:100px; text-align: center;color: rgb(243, 234, 234);" >
    <p> privacy police| Accessibility <br> </p>
    </footer>
</html>