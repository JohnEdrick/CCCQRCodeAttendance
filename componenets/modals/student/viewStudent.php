<div class="modal-bg" id="view-student">
    <div class="modal-container">
        <div class="title">
            STUDENT DETAILS
        </div>
        <div class="message-container">
            <div>
                <h5>STUDENT ID</h5>
                <h1 id="view-student-id">0200001322</h1>
            </div>
            <div>
                <h5>NAME</h5>
                <h1 id="view-student-name">John Edrick Nubla</h1>
            </div>
            <div onclick="HidePassword()" id="plain-text-pass">
                <h5>PASSWORD</h5>
                <h1 id="view-student-password">********</h1>
                <span class="view-tooltip">Hide Password</span>
            </div>
            <div onclick="ShowPassword()" id="hidden-text-pass">
                <h5>PASSWORD</h5>
                <h1>********</h1>
                <span class="view-tooltip">Show Password</span>
            </div>
        </div>

        <button onclick="CloseViewStudent()">Done</button>
    </div>
</div>