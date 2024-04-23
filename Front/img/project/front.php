<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Examination Hall Seating Arragement</title>
</head>

<body>
<nav class="navbar background">
    <ul class="nav-list">
        <div class="logo"><img src="img/pic6.webp    " alt="logo"></div>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
       
    </ul>
    <div class="rightnav">
        <input type="text" name="Search" id="Search">
        <button class="btn btn-sm">Search</button>
    </div>
</nav> 
<!-- <section class="background firstsection">
    <div class="box-main">

    </div>
</section> -->
<form action="db.php" method = "get">
    
    <fieldset>
        <legend>Raiganj University</legend>
        <br>
        <div>
            <lable>Department</lable>
            <input type="Text" name="dname">
      
            <lable>Year</lable>
            <input type="Text" name="syear">
            
        </div>
        <br>
        <div>
            <lable>Start Seat Number
            </lable>
            <input type="Text" name="ssnum">
         
            <lable>End Seat Number</lable>
            <input type="Text" name="esnum">

        </div>
        <br>
        <div>
        <lable>Select Subject</lable>
        <select name="Subject" id="sub">
            <option value ="">Select Subject</option>
            <option value ="Bengali">Bengali</option>
            <option value ="English">English</option>
            <option value ="Economics">Economics</option>
            <option value ="Education">Education</option>
            <option value ="BCA">BCA</option>
            <option value ="Math">Math</option>
            <option value ="Physics">Physics</option>
            <option value ="Chemistry">Chemistry</option>
            <option value ="History">History</option>
            <option value ="SansKrit">SansKrit</option>
        </select>
   
        <lable>Date</lable>
            <input type="Date" name="date">
  
        </div>
        <div>
        <br><lable>Select class Room</lable>
        <select name="Room" id="RN">
            <option value ="">Select Rooms</option>
            <option value ="Room No 1">Room No 1</option>
            <option value ="Room No 2">Room No 2</option>
            <option value ="Room No 3">Room No 3</option>
            <option value ="Room No 4">Room No 4</option>
            <option value ="Room No 5">Room No 5</option>
        </select>

    </div>
    <div>
        <br>
       
      
        <input type="submit" name ="save" value="Click here">
        
    </div>
        
        
    </fieldset>
</form>
</body>

</html>