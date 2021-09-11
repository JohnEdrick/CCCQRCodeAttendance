<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Attendance</title>
    <link rel="stylesheet" type="text/css" href="./css/sideNavBar.css">
    <link rel="stylesheet" type="text/css" href="./css/globalStyle.css">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/modals.css">
</head>

<body>
    <?php
    //Side Navbar
    include_once "./componenets/sideNavBar.php";
    
    

    //Student CRUD
    include_once "./componenets/studentTable.php";
    include_once "./componenets/modals/student/addStudent.php";
    include_once "./componenets/modals/student/deleteStudent.php";
    include_once "./componenets/modals/student/viewStudent.php";
    include_once "./componenets/modals/student/updateStudent.php";
    
    //Teacher CRUD
    include_once "./componenets/teacherTable.php";
    include_once "./componenets/modals/teacher/addTeacher.php";
    include_once "./componenets/modals/teacher/deleteTeacher.php";
    include_once "./componenets/modals/teacher/viewTeacher.php";
    include_once "./componenets/modals/teacher/updateTeacher.php";
    
    ?>

    <script src="./js/loggedIn.js">
    </script>
</body>

</html>