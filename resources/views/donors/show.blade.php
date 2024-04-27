<x-app-layout>
<link rel="stylesheet" href="main.css">
<style>
    /* main.css */
.wrapper.student-datails {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}
h1 {
    font-size: 24px;
    margin-bottom: 20px;
}
p {
    margin-bottom: 10px;
}
.back {
    display: block;
    margin-top: 20px;
    text-decoration: none;
    color: blue;
}
</style>
<link rel="stylesheet" href="/css/main.css">
<div class="wrapper student-datails">
    <div>
        <button id="printButton" id="clearButton><a role="button" class="btn btn-md btn-primary text-light" href="" style="margin-left: 1000px; background-color:green; padding:10px; border-radius:5px; color:#fff;">Print</a></button>
       <span id="dateTime" style="display: none;"></span>
        <div class="printableContent">
    </div>
    <h1>The donation from {{ $donor->first_name }} {{ $donor->last_name }}</h1>
    
    <table class="table">
        <tbody>
            <tr>
                <td>First Name:</td>
                <td>{{ $donor->first_name }}</td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td>{{ $donor->middle_name }}</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>{{ $donor->last_name }}</td>
            </tr>
            <tr>
                <td>Donor's ID:</td>
                <td>{{ $donor->donor_id }}</td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>{{ $donor->gender }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $donor->email }}</td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>{{ $donor->phone_no }}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{ $donor->address }}</td>
            </tr>
            <tr>
                <td>City:</td>
                <td>{{ $donor->city }}</td>
            </tr>
            <tr>
                <td>National ID:</td>
                <td>{{ $donor->national_id }}</td>
            </tr>
            <tr>
                <td>Company:</td>
                <td>{{ $donor->company }}</td>
            </tr>
            <tr>
                <td>Donated Amount:</td>
                <td>ksh.{{ $donor->donated_amount }}</td>
            </tr>
            <tr>
                <td>Donated Date:</td>
                <td>{{ $donor->donated_date }}</td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td>{{ $donor->nationality }}</td>
            </tr>
            <tr>
                <td>Occupation:</td>
                <td>{{ $donor->occupation }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/donors" class="back"><- Back to donor list</a>
</div>
<ul>
    {{-- <form action="/students/{{ $student->id}}" method="DETELE">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form> --}}
</ul>
</x-app-layout>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
window.print();
});
</script>
