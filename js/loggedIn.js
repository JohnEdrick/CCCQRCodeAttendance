//Tables
var StudentTable = document.getElementById("student-table");
var TeacherTable = document.getElementById("teacher-table");

//Student CRUD
var AddStudent = document.getElementById("add-student");
var DeleteStudent = document.getElementById("delete-student");
var ViewStudent = document.getElementById("view-student");
var UpdateStudent = document.getElementById("update-student");

//Teacher CRUD
var AddTeacher = document.getElementById("add-teacher");
var DeleteTeacher = document.getElementById("delete-teacher");
var ViewTeacher = document.getElementById("view-teacher");
var UpdateTeacher = document.getElementById("update-teacher");

//Message
var MessageModal = document.getElementById("message-modal");

//Nav Buttons
var OpenStudentBtn = document.getElementById("student-btn");
var OpenTeacherBtn = document.getElementById("teacher-btn");

//Show/Hide Password
var HiddenPassowrd = document.getElementById("hidden-text-pass");
var PlainTextPassword = document.getElementById("plain-text-pass");

function ShowPassword() {
  HiddenPassowrd.style.display = "none";
  PlainTextPassword.style.display = "block";
}

function HidePassword() {
  HiddenPassowrd.style.display = "block";
  PlainTextPassword.style.display = "none";
}

//Table Functions
function OpenStudentTable() {
  TeacherTable.style.display = "none";
  StudentTable.style.display = "block";
  OpenStudentBtn.classList.add("active");
  OpenTeacherBtn.classList.remove("active");
}

function OpenTeacherTable() {
  StudentTable.style.display = "none";
  TeacherTable.style.display = "block";
  OpenStudentBtn.classList.remove("active");
  OpenTeacherBtn.classList.add("active");
}

//Student CRUD
//ADD
function OpenAddStudent() {
  AddStudent.style.display = "block";
}
function CloseAddNewStudent() {
  AddStudent.style.display = "none";
}
//Delete
function OpenDeleteStudent(studentID, firstName, lastName, section) {
  document.getElementById("view-student-id").innerHTML = studentID;
  document.getElementById("view-student-name").innerHTML = lastName + firstName;
  document.getElementById("view-student-section").innerHTML = section;
  document.getElementById("delete-student-id").value = studentID;
  document.getElementById("delete-student-name").value = lastName + firstName;
  DeleteStudent.style.display = "block";
}
function CloseDeleteStudent() {
  DeleteStudent.style.display = "none";
}
//View
function OpenViewStudent(studentID, firstName, lastName, password) {
  document.getElementById("view-student-id").innerHTML = studentID;
  document.getElementById("view-student-name").innerHTML = lastName + firstName;
  document.getElementById("view-student-password").innerHTML = password;

  ViewStudent.style.display = "block";
}
function CloseViewStudent() {
  ViewStudent.style.display = "none";
}
//Update
function OpenUpdateStudent() {
  UpdateStudent.style.display = "block";
}
function CloseUpdateStudent() {
  UpdateStudent.style.display = "none";
}

//Teacher CRUD
//Add
function OpenAddTeacher() {
  AddTeacher.style.display = "block";
}
function CloseAddTeacher() {
  AddTeacher.style.display = "none";
}
//Delete
function OpenDeleteTeacher() {
  DeleteTeacher.style.display = "block";
}
function CloseDeleteTeacher() {
  DeleteTeacher.style.display = "none";
}
//View
function OpenViewTeacher() {
  ViewTeacher.style.display = "block";
}
function CloseViewTeacher() {
  ViewTeacher.style.display = "none";
}
function OpenUpdateTeacher() {
  UpdateTeacher.style.display = "block";
}
function CloseUpdateTeacher() {
  UpdateTeacher.style.display = "none";
}
//Message
function CloseMessageStudentAdded() {
  MessageModal.style.display = "none";
}

//Prevent from submitting again after refresh
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

//Search on table
function SearchTable() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-input");
  filter = input.value.toUpperCase();
  table = document.getElementById("data-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
