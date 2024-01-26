<html>
    <head>
        <title> Payment Page</title>
        <style><?php include 'CSS/Paymentstyle.css'; ?></style>
    </head>
    <body style="background-image:../images/Paymentbackground.png; ">
    <table class="tbl1">
        <tr>
          <th><img class="im1" src="images/logo.png" alt="Logo" height="200" width="200"></th>
          <th class="th1">Car Rental Service</th>
          <th>
            <ul style="text-align:center; background:transparent">
              <li><a href="#"><img style="text-align: center;" src="images/userlogo.png" alt="User account photo" width="60px" height="60px"></a></li>
              <li><div class="dropdwn">
                    <button class="btn1" >Sign up / Login</button>
                      <div class="dropdwn-list">
                        <a href="re">Sign up</a>
                        <a href="#">Login</a>
                      </div>
                    </div>
              </li>
            </ul>
          </th>
        </tr>
    </table>
    
    <!--Navigation bar-->
        <ul>  
            <li><a class="active" href="#">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="vehiclefleet">Vehicle fleet</a></li>
            <li><a href="contact">Contact</a></li>
      </ul>

      <center>
      <strong><h2>Payment Details</h2></strong>
    </center>
    
      <form method="post" action="Addpayment.php">
        Choose your Payment Method:
        <div class="choose-method">
          <div class="Method">
            <div><input type="radio" for="size1" name="pd1" id="Credit" ></div>
            <div><img id="size1" src="images/visa.jpg"></div>
          </div>
          <div class="Method">
            <div><input type="radio" for="pd2" name="Debit" id="Debit" checked> </div>
            <div><img id="size1" src="images/paypal.jpg" ></div>
          </div>
        </div>

           <div class="flex-container1">
              <div>
                <b>Card Number:</b>
                <input type="text" name="pd3" placeholder="xxxx xxxx xxxx xxxx" pattern="[0-9]{16}" required >
              </div>
              <div>
                <b>Expire Date:</b>
                <input type="month" name="pd4" required >
              </div>
            </div>

            <div class="flex-container1">
              <div>
                <b>Card Holder Name:</b>
                <input type="text" name="pd5" required >
              </div>
                
              <div style="margin-left:-50px;">
                <b>CVV</b>
                <input type="text" name="pd6" placeholder="xxx" pattern="[0-9]{3}" required >
              </div>
            </div>
            <br/><br/><br/><br/>
            <center>
            <input type="submit" class="subbutton" value="Submit" >
          </center>
      </form>
    

          
      
      
    </body>

    <hr>
    <footer style="background-color:rgb(121, 16, 16); height:100px; text-align: center;color: rgb(243, 234, 234);" >
    <p> privacy police| Accessibility <br> </p>
    </footer>
</html>