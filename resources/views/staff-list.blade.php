<x-app-layout>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}
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
.actions a.edit {
    background-color: #28a745;
    color: #fff;
    margin-right: 5px;
}
.actions a.delete {
    background-color: #dc3545;
    color: #fff;
}
.staffs-list {
    width: 70%;
    margin: 0 auto;
    margin-top: 50px;
}
</style>
<body>
    {{-- <button onclick="window.location.href='http://localhost/knsms2024/mpesa.php'" id="clearButton" style="margin-left: 250px">Deposit Now</button><br> --}}
    <div class="staffs-list">
        <h2 class="center">Staff List</h2>
        <form action="{{url('search')}}" method="get">
            <div>
                <input type="search" name="search" placeholder="Search Staff">
                <input type="submit" name="" id="" value="Search">
            </div>
        </form>
    <div style="margin-right: 10px; float:right;" class="center">
        <a href="{{url('/add-staff')}}" class="add-staff">Add Staff</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @php
             $counter = 1;
           @endphp
            @foreach($data as $staff)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->password}}</td>
                    <td class="actions"><a href="{{url('/edit-staff/'.$staff->id)}}" class="delete">Edit</a> | <a href="{{url('/delete-staff/'.$staff->id)}}" class="edit">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-app-layout>
