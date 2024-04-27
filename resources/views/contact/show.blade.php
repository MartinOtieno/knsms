<x-app-layout>
<link rel="stylesheet" href="main.css">
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
<div class="wrapper student-datails">
    <h1>Message from {{ $contact->first_name }} {{ $contact->last_name }}</h1>
    <table class="table">
        <tbody>
            <tr>
                <td>First Name:</td>
                <td>{{ $contact->first_name }}</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>{{ $contact->last_name }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td>{{ $subject->phone_no }}</td>
            </tr>
            <tr>
                <td>Message:</td>
                <td>{{ $contact->address }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/contact" class="back"><- Back to Contacts</a>
</div>
<ul>
    <form action="/contact/{{ $contact->id}}" method="DETELE">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</ul>
</x-app-layout>
