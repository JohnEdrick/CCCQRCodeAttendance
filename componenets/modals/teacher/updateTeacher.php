<div class="modal-bg" id="update-teacher">
    <div class="modal-container">
        <div class="title">
            Update Student
        </div>
        <div>
            <form method="POST">
                <div>
                    <label for="studentID">TEACHER ID</label>
                    <input type="text" id="studentID" name="studentID" value="" required>
                </div>
                <div>
                    <label for="fname">LAST NAME</label>
                    <input type="text" id="fname" name="fname" value="" required>
                </div>
                <div>
                    <label for="lname">FIRST NAME</label>
                    <input type="text" id="lname" name="lname" value="" required>
                </div>
                <button type="submit">Submit</button>
            </form>
            <button onclick="CloseUpdateTeacher()" id="cancel-btn">Cancel</button>
        </div>


    </div>
</div>