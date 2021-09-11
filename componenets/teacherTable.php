<div class="table-cointainer" id="teacher-table">
    <div class="top-container">
        <h3>Student</h3>
        <div class="search-container"><img src="./img/search-logo.png" alt="logo-search"><input type="search"></div>
    </div>
    <div class="mid-container">
        <table>
            <tr>
                <th>TEACHER ID</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>OPERATION</th>
            </tr>
            <tr>
                <td>20000137342</td>
                <td>JAMES</td>
                <td>BEN</td>
                <td class="operation-contaienr">
                    <span onclick="OpenViewTeacher()"><img src="./img/view.png" alt="view-btn"> <span
                            class="view-tooltip">View</span></span>
                    <span onclick="OpenUpdateTeacher()"><img src="./img/update.png" alt="update-btn"><span
                            class="view-tooltip">Update</span></span>
                    <span onclick="OpenDeleteTeacher()"><img src="./img/delete.png" alt="delete-btn"><span
                            class="view-tooltip">Delete</span></span>
                </td>
            </tr>
        </table>
    </div>
    <div class="bottom-container">
        <button onclick="OpenAddTeacher()">ADD NEW TEACHER</button>
    </div>
</div>