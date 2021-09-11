<div class="modal-bg" id="message-modal">
    <div class="modal-container">
        <div class="title">
            <?php echo $_POST['header']; ?>
        </div>
        <div class="message-container">
            <div>
                <h5><?php echo $_POST['$title1']; ?></h5>
                <h1><?php echo $_POST['$des1']; ?></h1>
            </div>
            <div>
                <h5><?php echo $_POST['$title2']; ?></h5>
                <h1><?php echo $_POST['$des2']; ?></h1>
            </div>
        </div>
        <button onclick="CloseMessageStudentAdded()">Done</button>
    </div>
</div>