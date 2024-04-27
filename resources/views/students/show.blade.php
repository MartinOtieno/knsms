<x-app-layout>
<link rel="stylesheet" href="/css/main.css">
<style>
    /* main.css */
.wrapper.student-details {
    /* max-width: 700px; */
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.table {
    width: 80%; /* Set the width of the table */
    margin: 0 auto; /* Center the table horizontally */
    border-collapse: collapse;
}
.table th,
.table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
.table th {
    background-color: blueviolet;
}
.table tbody tr:hover {
    background-color: #f5f5f5;
}
</style>
<link rel="stylesheet" href="main.css">
<div class="wrapper student-details">
    <div>
        <button id="printButton" id="clearButton><a role="button" class="btn btn-md btn-primary text-light" href="" style="margin-left: 1000px; background-color:green; padding:10px; border-radius:5px; color:#fff;">Print</a></button>
       <span id="dateTime" style="display: none;"></span>
        <div class="printableContent">
    </div>

    <h1>More Details for  {{ $student->first_name }} {{ $student->last_name }}</h1>

    <table class="table">
        <tbody>
            <tr>
                <td>First Name:</td>
                <td>{{ $student->first_name }}</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>{{ $student->last_name }}</td>
            </tr>
            <tr>
                <td>Registration Number:</td>
                <td>{{ $student->reg_no }}</td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>{{ $student->gender }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $student->email }}</td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>{{ $student->phone_no }}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{ $student->address }}</td>
            </tr>
            <tr>
                <td>City:</td>
                <td>{{ $student->city }}</td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>{{ $student->date_of_birth }}</td>
            </tr>
            <tr>
                <td>Disability:</td>
                <td>{{ $student->disability }}</td>
            </tr>
            <tr>
                <td>Faculty:</td>
                <td>{{ $student->faculty }}</td>
            </tr>
            <tr>
                <td>Course:</td>
                <td>{{ $student->course }}</td>
            </tr>
            <tr>
                <td>Year of Study:</td>
                <td>{{ $student->year_of_study }}</td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td>{{ $student->semester }}</td>
            </tr>
            <tr>
                <td>Transcript:</td>
                <td>{{ $student->transcript }}</td>
            </tr>
            {{-- <tr>
                <td>Financial Statement:</td>
                <td>{{ $student->fin_stmt }}</td>
            </tr> --}}
            <tr>
                <td>Account Number:</td>
                <td>{{ $student->acct_no }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/students" class="back"><- Back to student list</a>
    <!-- <form action="/students/{{ $student->id}}" method="DETELE">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form> -->
</div>
</x-app-layout>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
window.print();
});
</script>
