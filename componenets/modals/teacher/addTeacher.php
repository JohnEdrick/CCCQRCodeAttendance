<div class="modal-bg" id="add-teacher">
    <div class="modal-container">
        <div class="title">
            Add New Teacher
        </div>
        <div>
            <form method="POST">
                <div>
                    <label for="studentID">TEACHER ID</label>
                    <input type="text" id="studentID" name="studentID">
                </div>
                <div>
                    <label for="fname">LAST NAME</label>
                    <input type="text" id="fname" name="fname">
                </div>
                <div>
                    <label for="lname">FIRST NAME</label>
                    <input type="text" id="lname" name="lname">
                </div>
                <button type="submit">Submit</button>
            </form>
            <button onclick="CloseAddTeacher()" id="cancel-btn">Cancel</button>
        </div>


    </div>
</div>