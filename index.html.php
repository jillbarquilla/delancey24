<?php
session_start();

if(isset($_POST["submit"])){
    $_SESSION['fullnameSession'] = $_POST["fname"];
    $_SESSION['ageSession'] = $_POST["Age"];
    $_SESSION['bdateSession'] = $_POST["bdate"];
    $_SESSION['contactSession'] = $_POST["contact"];
    $_SESSION['emailSession'] = $_POST["email"];
    $_SESSION['courseSession'] = $_POST["course"];
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF_8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>document</title>
</head>
<body>
    <div class="container">
        <h1>Contact Details</Details</h1>
        <form method="POST">
            <label for="text">fullname Input:</label>
            <input type="text" id="fname" placeholder="fname"></br>

           
            <label for="text">Age Input:</label>
            <input type="number" id="Age" name="Age"></br>

            <label for="Text">Birthdate Input:</label>
            <input type="date" id="bdate" name="bdate"></br>

            <label for="Contact">Contact Input:</label>
            <input type="number" id="contact" name="contact"></br>

            <label for="Email">Email Input:</label>
            <input type="email" id="email" name="email"></br>

            


            <label for="Course">Course Input:</label>
            <input type="course" id="course" name="course"></br>

            <label for="Select">Course:</label><br>
            <select id="Select" name="Select">
                <option value="BSE">BSE</option>
                <option value="BSIS">BSIS</option>
                <option value="BSCS">BSCS </option>
                <option value="BSAIS">BSAIS</option>
                
</select></br>

<
            <input type="submit"  name="submit">
            </form>

            

</body>
</html>
                 







            


            

            








            


