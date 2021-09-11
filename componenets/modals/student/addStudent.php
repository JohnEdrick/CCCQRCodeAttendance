<div class="modal-bg" id="add-student">
    <div class="modal-container">
        <div class="title">
            Add New Student
        </div>
        <div>
            <form action="./index.php" method="POST" autocomplete="off">
                <div>
                    <label for="studentID">STUDENT ID</label>
                    <input type="text" id="studentID" name="studentID" maxlength="30" required>
                </div>
                <div>
                    <label for="fname">LAST NAME</label>
                    <input type="text" id="fname" name="fname" maxlength="30" required>
                </div>
                <div>
                    <label for="lname">FIRST NAME</label>
                    <input type="text" id="lname" name="lname" maxlength="30" required>
                </div>
                <div>
                    <label for="course">COURSE</label>
                    <input type="text" id="course" name="course" maxlength="15" required>
                </div>
                <div>
                    <label for="year">YEAR</label>
                    <input type="text" id="year" name="year" maxlength="15" required>
                </div>
                <div>
                    <label for="section">SECTION</label>
                    <input type="text" id="section" name="section" maxlength="15" required>
                </div>
                <button type="submit" name="add-new-student">Submit</button>
            </form>
            <button onclick="CloseAddNewStudent()" id="cancel-btn">Cancel</button>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['add-new-student'])){    
    include_once "./componenets/config.php";
    $studentID = $conn->real_escape_string($_POST['studentID']);
    $lastName = $conn->real_escape_string($_POST['lname']);
    $firstName = $conn->real_escape_string($_POST['fname']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = $conn->real_escape_string($_POST['year']);
    $section =$conn->real_escape_string($_POST['section']);

    $permittedChars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = substr(str_shuffle($permittedChars), 0, 8);

    $sql = "INSERT INTO `student`(`STUDENT_ID`, `LAST_NAME`, `FIRST_NAME`, `COURSE`, `YEAR`, `SECTION_NAME`, `PASSWORD`) VALUES (?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        return "SQL error";
    }else{
        mysqli_stmt_bind_param($stmt,"sssssss",$studentID,$lastName,$firstName,$course,$year,$section,$password);
        if (mysqli_stmt_execute($stmt)){
        $_POST['header'] = "STUDENT ADDED";
        $_POST['$title1'] = "STUDENT ID";
        $_POST['$des1']= $_POST['studentID'];
        $_POST['$title2'] = "PASSWORD";
        $_POST['$des2'] = $password;
        include_once "./componenets/modals/Message.php";
        
        }
        else{
            echo "error";
            return "Not Added";
        }
    }
   
}    
?>