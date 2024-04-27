<x-app-layout>
<link rel="stylesheet" href="main.css">
<style>
.container {
    width: 80%;
    margin: 0 auto;
    padding-top: 50px;
}
h2 {
    color: #333;
    text-align: center;
}
.add-staff {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.table th,
.table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}
.table th {
    background-color: #f2f2f2;
}
.table td {
    background-color: #fff;
}
.actions {
    white-space: nowrap;
}
.actions a {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid transparent;
    border-radius: 5px;
    text-decoration: none;
}
.btn {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    .action-buttons a {
        margin-right: 5px;
    }
</style>
<div class="wrapper pizza-index">
<form action="show">
    <img src="/images/kibulogo.png" alt="logo" style="width: 60px; margin-left:490px;">
<h1>Messages from the users.</h1>
<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>subject</th>
                <th>message</th> 
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1; // Initialize counter variable
            @endphp
            @foreach($contact as $contact)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->last_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
                <!-- Add more table cells for other data -->
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
</div>
</x-app-layout>