<html>
<head>
     <title>DONATIONS</title>
</head>
<body> <center>
    <h1>TUITION WAIVER</h1>
    <form method="POST">
    NAME       : <input type="name" name="name"> <br><br>
    REG_NO     : <input type="REG_NO" name="REG_NO"><br><br>
    YEAR_OF_STUDY:<select name="YEAR_OF_STUDY">
                   <option value="III">III</option>
                    <option value="II">II</option>
                    <option value="I">I</option> </select><br><br>

    SEMESTER    :    <select name="SEMESTER">
                    <option value="II">II</option>
                    <option value="I">I</option>
                    </select> <br><br>
    
    STUDY_SESSION: <select name="STUDY_SESSION">
                    <option value="DAY">DAY</option>
                    <option value="WEEKEND">WEEKEND</option>
                    <option value="EVENING">EVENING</option>
                   </select>
                     <br><br> 
    EMAIL     : <input type="email" name="email"><br><br>   
    PASSWORD     :      <input type="password" name="password"> <br><br>
    FACULTY  :  <select name="FACULTY">
                <option value="SCIENCE&TECHNOLOGY">SCIENCE&TECHNOLOGY</option>
                <option value="ARTS&HUMANITIES">ARTS&HUMANITIES</option>
                <option value="EDUCATION">EDUCATION</option>
                </select><br><br>
    COURSE      :   <select name="course"> 
                 <option value="BIT">BIT</option>
                  <option value="BCS">BCS</option>
                  <option value="BBA">BBA</option>
                  <option value="BAF">BAF</option>
               </select><br><br>
    CONTACT    :  <input type="CONTACT" name="CONTACT"><br><br>


    money_needed:   <select name="money_needed">
                    <option value="500000">500000</option>
                    <option value="400000">400000</option>
                    <option value="300000">300000</option>

                    </select><br><br>
    SEX          :     <input type="radio" name="sex" value='F'>F
                <input type="radio" name="sex" value='M'>M<br><br>


   
               <input type="SUBMIT" name="SUBMIT">
</form>

<?php
$con = mysqli_connect('localhost','kisitubrian','kisitubryan@55kaama','papa');
if(isset($_POST['SUBMIT']))
    {
        $name = $_POST['name'];
        $REG_NO = $_POST['REG_NO'];
        $YEAR_OF_STUDY = $_POST['YEAR_OF_STUDY'];
        $SEMESTER = $_POST['SEMESTER'];
        $STUDY_SESSION = $_POST['STUDY_SESSION'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $FACULTY = $_POST['FACULTY'];
         $course = $_POST['course'];
         $CONTACT = $_POST['CONTACT'];
        $money_needed = $_POST['money_needed'];
         $sex  = $_POST['sex'];

 
        $query = "insert into users(name,REG_NO,YEAR_OF_STUDY,SEMESTER,STUDY_SESSION,email,password,FACULTY,course,CONTACT,money_needed,sex) values('$name','$REG_NO','$YEAR_OF_STUDY','$SEMESTER','$STUDY_SESSION','$email','$password','$FACULTY','$course','$CONTACT','$money_needed','$sex')";            

        $execute = mysqli_query($con,$query);

    }
?>

</center>
</body>


    </html>