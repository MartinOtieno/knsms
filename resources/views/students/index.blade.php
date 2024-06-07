<x-app-layout>
<link rel="stylesheet" href="/css/main.css">
<style>
    /* .table {
        width: 100%;
        background-color: #120896;
    }
    .table th,
    .table td {
        padding: 2px;
        text-align: left;
        border-bottom: 1px solid;
    }
    .table th {
        background-color: #120896;
        color: #fff;
        
    }
    .table tbody tr:hover {
        background-color: #f5f5f5;
        text-align: center;
    }
    .wrapper {
        background-color: #bda8a8;
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        justify-items: center;
        margin-top: 100px;
        
    }
    h1 {
        margin-bottom: 20px;
        
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
    .text-center{
        justify-items: center;
    }
    h1 {
    margin-bottom: 10px;
    color: #000;
    font-size: 20px;
    text-decoration: underline;
} */
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
    
{{-- <h1>The students who have made their Applications<br> for the financial support</h1> --}}
<div class="wrapper student-index" style="margin-top: 80px">
    
    <form action="" class="text-center">
        <img src="/images/kibulogo.png" alt="logo" style="width: 60px; margin-left:550px;">
        <h1>The Application List</h1>
        {{-- <form action="{{url('search')}}" method="get">
            <div>
                <input type="search" name="search" placeholder="Search Student">
                <input type="submit" name="" id="" value="Search">
            </div>
        </form> --}}
        <table class="table">
            <thead>
                <tr>
                    <th class="th_deg">#</th>
                    <th class="th_deg">Reg NO.</th>
                    <th class="th_deg">First Name</th>
                    <th class="th_deg">Last Name</th>
                    <th class="th_deg">Account Number</th>
                    <th class="th_deg">Phone Number</th>
                    <th class="th_deg">Status Update</th>
                    <th class="th_deg">Actions</th> 
                </tr>
            </thead>
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach($students as $student)
                <tr>
                    <td>{{ $counter++ }}</td> <!-- Display and increment the counter -->
                    <td>{{ $student->reg_no }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->acct_no }}</td>
                    <td>{{ $student->phone_no }}</td>
                    <td>
    
                        @if($student->status == 'approved')
                        <span style="color: skyblue;">Approved</span>
                        @endif
    
                        @if($student->status == 'rejected')
                        <span style="color: red;">Rejected</span>
                        @endif
    
                        @if($student->status == 'waiting')
                        <span style="color: #000">waiting</span>
                        @endif
                    </td>
                    <td class="action-buttons">
                        <a class="btn btn-success" href="{{url('approve_student',$student->id)}}" style="background-color: green;">Approve</a>
                        <a href="/students/{{ $student->id }}" class="btn btn-primary">View</a>
                        <a class="btn btn-warning"href="{{url('reject_student',$student->id)}}" style="background-color: red;">Reject</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>
<p><a href="('/')" style="margin: 100px; margin-top:100px; color:#007bff;"><-Go Back Home</a></p>
</x-app-layout>


