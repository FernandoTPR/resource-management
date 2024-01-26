function loadCar(){
    var car=["C01   Alto:Rs.4500.00", "C02     Axio:Rs.5500.00", "C03     Wagon R:Rs.5000.00","C04     Prius:Rs.6000.00","C05     Vitz:Rs.5000.00"];

    for(var i=0, len=car.length, list ="<strong>Model and rate per</strong><br><br>"; i<len; i++)
    {
        list+="  "+car[i]+"<br>";
    }

    document.getElementById("vehi").src="images/cars.png";
    document.getElementById("details").innerHTML=list;
   
}

function loadVan(){
    var van=["V01     KDH:Rs.20000.00", "V02     NOAH:Rs.15000.00", "V03     Caraven(new):Rs.10000.00","V04     Dolpin:Rs.10000.00","V05     Suzuki Every:Rs.11000.00"];

    for(var i=0, len=van.length, list ="<strong>Model and rate per</strong><br><br>"; i<len; i++)
    {
        list+="  "+van[i]+"<br>";
    }

    document.getElementById("vehi").src="images/vans.png";
    document.getElementById("details").innerHTML=list;
   
 }

 
function loadLorry(){
    var lorry=["L01     ISUZU Elf:Rs.15000.00", "L02     Mahindra Maxximo:Rs.11000.00", "L03     Dimo(batta):Rs.7500","L04     Leylend(G45):Rs.25000.00","L05     Freez lorry:Rs.30000.00"];

    for(var i=0, len=lorry.length, list ="<strong>Model and rate per</strong><br><br>"; i<len; i++)
    {
        list+="  "+lorry[i]+"<br>";
    }

    document.getElementById("vehi").src="images/lorry.png";
    document.getElementById("details").innerHTML=list;
   
}

function loadbike(){
    var bike=["B01     CT100:Rs.2000.00", "B02     Platina:Rs.2500.00", "B03     Pulsar(150):Rs.3000.00","B04     Honda(Dio):Rs.2500.00","B05     Hero(Hunk):Rs.4000.00"];

    for(var i=0, len=bike.length, list ="<strong>Model and rate per</strong<br><br>"; i<len; i++)
    {
        list+="  "+bike[i]+"<br>";
    }

    document.getElementById("vehi").src="images/bike.png";
    document.getElementById("details").innerHTML=list;
   
}


function loadVIP(){
    var vip=["S01     Defender:Rs.35000.00", "S02     Rolls-Royce:Rs.60000.00", "S03     Benz(C200):Rs.45000.00","S04     Hummer(H2):Rs.80000.00","S05     Range Rover:Rs.50000.00"];

    for(var i=0, len=vip.length, list ="<strong>Model and rate per</strong><br><br>"; i<len; i++)
    {
        list+="  "+vip[i]+"<br>";
    }

    document.getElementById("vehi").src="images/vip.png";
    document.getElementById("details").innerHTML=list;
   
}

