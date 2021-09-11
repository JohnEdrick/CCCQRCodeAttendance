<div class="modal-bg" id="update-student">
    <div class="modal-container">
        <div class="title">
            Update Student
        </div>
        <div>
            <form method="POST">
                <div>
                    <label for="studentID">STUDENT ID</label>
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
                <div>
                    <label for="course">COURSE</label>
                    <input type="text" id="course" name="course" value="" required>
                </div>
                <div>
                    <label for="year">YEAR</label>
                    <input type="text" id="year" name="year" value="" required>
                </div>
                <div>
                    <label for="section">SECTION</label>
                    <input type="text" id="section" name="section" value="" required>
                </div>
                <div>

                </div>
                <button type="submit">Submit</button>
            </form>
            <button onclick="CloseUpdateStudent()" id="cancel-btn">Cancel</button>
        </div>


    </div>
</div>