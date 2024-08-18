<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="database.php">
    <div class="container bg-primary-subtle main" id="main" >   
        <h1 style="margin-top: 20px"> RESERVATION</h1>
        <hr>
            <!-- For personal information Box. -->
     <!-- <div class="personalinf">
        <div class="perheading bg-primary">PERSONAL INFORMATION</div>
        <b class="p-3">Title*</b><br>
        <select class="mt-1 mb-3 form-control">
            <option name="prof">Mr.</option>
            <option name="prof">mrs.</option>
            <option name="prof">Dr.</option>
            <option name="prof">er.</option>    
        </select>
        <b class="p-2">First Name</b>
        <input  class="mt-1 mb-3 form-control" type="text" placeholder="First name" required>
        <b class="p-2">Last Name</b>
        <input class="mt-1 mb-3 form-control" type="text" placeholder="last name" required>
        <b class="p-2">Email</b>
        <input class="mt-1 mb-3 form-control" type="Email" placeholder="Enter your email id" required>
        <b class="p-2">Nationality*</b>
        <input type="radio" name="nation" required><label style="margin-left: 10px;">Indian</label>
        <input class="mt- mb-1" type="radio" name="nation"><label style="margin-left: 10px;" for="">Non-Indian</label><br>
        <b class="p-2">Passport country*</b>
        <select class="mt-1 mb-1 form-control" required>
            <option></option>
            <option>India</option>
            <option>Kubait</option>
            <option>USA</option>
            <option>Saudi arabia</option>
            <option>Jermani</option>
            <option>Pakisitan</option>
            <option>Afganistan</option>
            <option>Turkey</option>
            <option>Australia</option>
            <option>Russia</option>
        </select>
        <b class="p-2">Phone number*</b>
        <input  class="mt-1 form-control" type="text" placeholder="Enter phone number" required>
    </div> -->
    <div class="box">
    <div class="personalinf">
    <div class="perheading bg-primary">PERSONAL INFORMATION</div>
        <b class="p-3">Title*</b><br>
        <select name="prof" class="mt-1 mb-3 form-control" required>
            <option value="Mr.">Mr.</option>
            <option value="mrs.">mrs.</option>
            <option value="Dr.">Dr.</option>
            <option value="er.">er.</option>    
        </select>
        <b class="p-2">First Name</b>
        <input class="mt-1 mb-3 form-control" type="text" placeholder="First name" name="uname" required>
        <b class="p-2">Last Name</b>
        <input class="mt-1 mb-3 form-control" type="text" placeholder="last name" name="ulstname" required>
        <b class="p-2">Email</b>
        <input class="mt-1 mb-3 form-control" type="Email" placeholder="Enter your email id" name="mail" required>
        <b class="p-2">Nationality*</b>
        <input type="radio" name="nation" value="Indian" required><label style="margin-left: 10px;">Indian</label>
        <input class="mt- mb-1" type="radio" name="nation" value="non-Indian"><label style="margin-left: 10px;" for="">Non-Indian</label><br>
        <b class="p-2">Passport country*</b>
        <select name="country" class="mt-1 mb-1 form-control" required>
            <option></option>
            <option value="India">India</option>
            <option value="Kubait">Kubait</option>
            <option  value="USA">USA</option>
            <option value="Saudi arabia">Saudi arabia</option>
            <option value="Germany">Germany</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Afganistan">Afganistan</option>
            <option value="Turkey">Turkey</option>
            <option value="Australia">Australia</option>
            <option value="Russia">Russia</option>
        </select>
        <b class="p-2">Phone number*</b>
        <input  class="mt-1 form-control" type="text" placeholder="Enter phone number" name="cnumber" required>
    </div>
    <!-- For Reservation information Box. -->
    <div class="reservationinf">
        <div class="resheading bg-primary">
        RESERVATION INFORMATION
        </div>
        <b class="p-2">Type of room*</b>
        <select name="troom" class="mt-1 mb-3 form-control" required>
            <option></option>
            <option value="SUPERIOR ROOM">SUPERIOR ROOM</option>
            <option value="DELUXE ROOM">DELUXE ROOM</option>
            <option value="GUEST HOUSE">GUEST HOUSE</option>
            <option value="SINGLE ROOM">SINGLE ROOM</option>
        </select>
        <b class="p-2">Bedding Type*</b>
        <select name="btype" class="mt-1 mb-3 form-control" required>
            <option value=""></option>
            <option value="single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
            <option value="None">None</option>
        </select>
        <b class="p-2">Meal Plan</b>
        <select name="mplan" class="mt-1 mb-3 form-control" required>
            <option value=""></option>  
            <option value="Room only">Room only</option>
            <option value="Breakfast">Breakfast</option>
            <option value="Half Board">Half Board</option>
            <option value="Full Board">Full Board</option>
        </select>
        <b class="p-2">Check in*</b>
        <input type="date" class="mt-1 mb-3 form-control" name="Checkin" required>
        <b class="p-2">Check out</b>
        <input type="date" class="mt-1 mb-3 form-control" id="birthday" name="Checkout" required>
       </div>
    </div>
</div>
    <input type="Submit" style="width: 100px; height: 50px; background-color:blue; position:relative; bottom: 80px; left: 680px;
background: #0066A2;
color: #fff;
border: 1px solid #eee;
border-radius: 20px;
box-shadow: 5px 5px 5px #eee;
text-shadow: none;"value="Submit" name="submit">
</form>
</body>
</html> 