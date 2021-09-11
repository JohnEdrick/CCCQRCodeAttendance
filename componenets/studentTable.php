<div class="table-cointainer" id="student-table">
    <div class="top-container">
        <h3>Student</h3>
        <div class="search-container"><img src="./img/search-logo.png" alt="logo-search"><input type="search"
                id="search-input" onkeyup="SearchTable()" onfocusout="SearchTable()" placeholder="Search for data">
        </div>
    </div>
    <div class="mid-container">
        <table id="data-table">
            <tr>
                <th>STUDENT ID</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>COURSE</th>
                <th>YEAR</th>
                <th>SECTION NAME</th>
                <th>OPERATION</th>
            </tr>
            <?php 
            include_once "./componenets/config.php";
            $sql = "SELECT * FROM student";
            $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "SQL statement failed 222";

            }
            else{
                if (mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                }
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    $studentID = $row['STUDENT_ID'];
                    $lastName = $row['LAST_NAME'];
                    $firstName = $row['FIRST_NAME'];
                    $course = $row['COURSE'];
                    $year = $row['YEAR'];
                    $sectionName = $row['SECTION_NAME'];
                    $password = $row['PASSWORD'];

                    echo "<td>$studentID</td>";
                    echo "<td>$lastName</td>";
                    echo "<td>$firstName</td>";
                    echo "<td>$course</td>";
                    echo "<td>$year</td>";
                    echo "<td>$sectionName</td>";
                    echo '<td class="operation-contaienr">';
                    echo '<span onclick=OpenViewStudent("'.$studentID.'","'.$lastName.'","'.$firstName.'","'.$password.'")><img src="./img/view.png" alt="view-btn"> <span
                    class="view-tooltip">View</span></span>';
                    echo '<span onclick="OpenUpdateStudent()"><img src="./img/update.png" alt="update-btn"><span
                    class="view-tooltip">Update</span></span>';
                    echo '<span onclick=OpenDeleteStudent("'.$studentID.'","'.$lastName.'","'.$firstName.'","'.$sectionName.'")><img src="./img/delete.png" alt="delete-btn"><span
                    class="view-tooltip">Delete</span></span>';
                    echo "</td></tr>";
                }            
            }
            ?>
        </table>
    </div>
    <div class="bottom-container">
        <button onclick="OpenAddStudent()">ADD NEW STUDENT</button>
    </div>
</div>