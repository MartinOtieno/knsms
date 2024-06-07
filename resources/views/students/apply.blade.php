<x-app-layout>
<link rel="stylesheet" href="main.css">
<section id="student" class="students">
    <div class="wrapper-students">
        <form action="/students" method="POST" class="application-form">
            @csrf
        <img src="/images/kibulogo.png" alt="logo" class="logo-form">
        <h1>Finance Assistant Applicaticon Form</h1>
        <fieldset class="details-group">
        <div class="padding">
            <label for="name" >Enter First Name:</label>
            <input type="text" id="first_name" name="first_name" class="text">
            <label for="name">Enter Last Name:</label>
            <input type="text" id="last_name" name="last_name" class="text">
            <label for="name" >Enter Registration Number:</label>
            <input type="text" id="reg_no" name="reg_no" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Enter Phone Number:</label>
            <input type="tel" id="phone" name="phone_no" pattern="(07|01)\d{8}" minlength="10" maxlength="10" placeholder="07XXXXXXXX or 01XXXXXXXX" required>
            <label for="gender" style=" margin-right:5px;">Select Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male" style="margin-right: 10px;">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="margin-right: 10px;">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other" style="margin-right: 10px;">Others</label><br>
            <label for="address">Enter Postal Address:</label>
            <textarea id="address" name="address" rows="1" cols="30" required placeholder="P.O Box 123-42605"></textarea>
            <label for="accountNumber" style="margin-left: 30px;">Enter City:</label>
            <input type="text" id="city" name="city" required placeholder="Nairobi-Kenya">
            <label for="dob" style="margin-left: 30px;">Enter Date of Birth:</label>
            <input type="date" id="dob" name="date_of_birth" required><br>
            <label for="dob">Are you an orphan</label>
            <input type="text" id="orphanage_status" name="orphanage_status" required>
            <label for="accountNumber" >Enter Account Number:</label>
            <input type="number" id="accountNumber" name="acct_no" required>
            <label for="disability" style=" margin-right:5px;" class="text">Do you have any disability?:</label>
            <input type="radio" id="disabilityYes" name="disability" value="yes" onclick="toggleDisabilityInput()">
            <label for="disabilityYes" style="margin-right: 10px;">Yes</label>
            <input type="radio" id="disabilityNo" name="disability" value="no" onclick="toggleDisabilityInput()">
            <label for="disabilityNo" style="margin-right: 10px;">No</label><br>
            <div id="disabilityInput" style="display: none;">
                <label for="disabilityType">Please Specify</label>
                <input type="text" id="disabilityType" name="disabilityType" placeholder="spesify type of disability">
            </div>
            <label for="faculties" >Select Your Faculty:</label>
            <select id="faculties" name="faculty" onchange="updateCourses()">
                <option value="select">Select here:</option>
                <option value="SCAI">SCAI (School of Computing and Informatics)</option>
                <option value="BCOM">BCOM (Faculty of Business and Commerce)</option>
                <option value="SOE">SOE (School of Engineering)</option>
                <option value="SON">SON (School of Nursing)</option>
                <option value="FASS">FASS (Faculty of Arts and Social Sciences)</option>
                <option value="FS">FS (Faculty of Science)</option>
            </select>
            <label for="courses" style="margin-left: 40px;">Select Your Course:</label>
            <select id="courses" name="course" aria-placeholder="Social work">
            </select>
            <br><br>
            <label for="years"> Select the Year of study:</label>
            <select id="years" name="year_of_study" onchange="updateSemesters()">
                <option value="select">Select here:</option>
                <option value="yearOne">Year One</option>
                <option value="yearTwo">Year Two</option>
                <option value="yearThree">Year Three</option>
                <option value="yearFour">Year Four</option>
            </select>
            <label for="semesters" style="margin-left: 30px;">Select the Semester:</label>
            <select id="semesters" name="semester">
            </select><br><br>
            <div class="files">
                <label for="transcript">Transcripts:</label>
                <input type="file" id="transcripts" name="transcript" accept=".pdf" required><br><br>
            </div>
        </div>
        </fieldset>
        <div class="button-form">
        <button id="clearButton">Clear All</button>
        <input type="submit" value="Submit">
        </div>
        </form>
    </div>
    <script>
        function updateCourses() {
        var facultySelect = document.getElementById("faculties");
        var coursesSelect = document.getElementById("courses");
        var selectedFaculty = facultySelect.value;
        coursesSelect.innerHTML = ""; 
        var courses = [];
        switch(selectedFaculty) {
            case "SCAI":
                courses = ["Information Technology", "Computer Science"];
                break;
            case "FASS":
                courses = ["Criminology and Social Work", "English Literature", "Journalism and Mass Communication"];
                break;
            case "SOE":
                courses = ["Psychology and Early Childhood Education", "Curriculum and Pedagogy", "Education Fundations and Educational Planning and Management"];
                break;
            case "BCOM":
                courses = ["Economics, Finance and Accounting", "Business Administration and Management"];
                break;
            case "FS":
                courses = ["Mathematics", "Science Engineering and Technology", "Agriculture and Veterinary Sciences", "Biological and Environmental Sciences"];
                break;
            case "SON":
                courses = ["Nursing Education Research and Leadership", "Medical Surgical Nursing", "Community Health and Mental Health Nursing", "Midwifery"];
                break;
            default:
                courses = [];
                break;
        }
        for(var i = 0; i < courses.length; i++) {
            var option = document.createElement("option");
            option.text = courses[i];
            coursesSelect.add(option);
        }
    }
    function updateSemesters() {
        var yearSelect = document.getElementById("years");
        var semesterSelect = document.getElementById("semesters");
        var selectedYear = yearSelect.value;
        semesterSelect.innerHTML = ""; 
        var semesters = [];
        switch(selectedYear) {
            case "yearOne":
                semesters = ["Semester One", "Semester Two", "Semester Three"];
                break;
            case "yearTwo":
                semesters = ["Semester One", "Semester Two", "Semester Three"];
                break;
            case "yearThree":
                semesters = ["Semester One", "Semester Two", "Semester Three"];
                break;
            case "yearFour":
                semesters = ["Semester One", "Semester Two", "Semester Three"];
                break;
            default:
                semesters = [];
                break;
        }
        for(var i = 0; i < semesters.length; i++) {
            var option = document.createElement("option");
            option.text = semesters[i];
            semesterSelect.add(option);
        }
    }
    function toggleDisabilityInput() {
    var disabilityInput = document.getElementById("disabilityInput");
    var disabilityYes = document.getElementById("disabilityYes");
    
    if (disabilityYes.checked) {
        disabilityInput.style.display = "block";
    } else {
        disabilityInput.style.display = "none";
    }
}
document.addEventListener('DOMContentLoaded', function() {
            const clearButton = document.getElementById('clearButton');
            const inputs = document.querySelectorAll('inputs');

            clearButton.addEventListener('click', function() {
                inputs.forEach(inputs => {
                    input.value = '';
                });
            });
        });
document.getElementById("text").addEventListener("input", function() {
  var inputValue = this.value;
  var cleanValue = inputValue.replace(/[^A-Za-z]/g, '');
  this.value = cleanValue;
});
</script>
</section>
</x-app-layout>