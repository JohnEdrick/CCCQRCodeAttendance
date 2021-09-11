<div class="modal-bg" id="delete-student">
    <div class="modal-container">
        <div class="title">
            CONFIRM DELETE
        </div>
        <div class="message-container">
            <div>
                <h2>Are you sure you sure you want to delete this account?</h2>
            </div>
            <div>
                <h5>STUDENT ID</h5>
                <h1 id="view-student-id">0200001322</h1>
            </div>
            <div>
                <h5>NAME</h5>
                <h1 id="view-student-name">John Edrick Nubla</h1>
            </div>
            <div>
                <h5>SECTION</h5>
                <h1 id="view-student-section">BSCS601</h1>
            </div>
        </div>
        <form action="index.php" method="post">
            <input type="hidden" value="" name="delete-student-id" id="delete-student-id">
            <input type="hidden" value="" name="delete-student-name" id="delete-student-name">
            <button name="update-student">Delete</button>
        </form>

        <button onclick="CloseDeleteStudent()" id="cancel-btn">Cancel</button>
    </div>
</div>

<?php
if(isset($_POST['update-student'])){    
    include_once "./componenets/config.php";
    $userID = $conn->real_escape_string($_POST['delete-student-id']);
    $sql = "DELETE FROM `student` WHERE `student`.`STUDENT_ID` = '$userID'";
    if ($conn->query($sql) === TRUE) {
        $_POST['header'] = "STUDENT DELETED";
        $_POST['$title1'] = "STUDENT ID";
        $_POST['$des1']= $_POST['delete-student-id'];
        $_POST['$title2'] = "STUDENT NAME";
        $_POST['$des2'] = $_POST['delete-student-name'];;
        include_once "./componenets/modals/Message.php";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;

    }
}