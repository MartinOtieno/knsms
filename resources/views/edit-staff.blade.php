<x-app-layout>
<style>
.container {
    width: 80%;
    margin: 0 auto;
    padding-top: 50px;
    background-color: #007bff
}
h2 {
    text-align: center;
    color: #333;
}
.form-label {
    margin-bottom: 5px;
}
.form-control {
    width: 50%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
.alert {
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}
.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.btn-primary {
    background-color: #007bff;
    color: #fff;
}
.btn-danger {
    background-color: #dc3545;
    color: #fff;
}
.mssg {
    font-size: 20px;
    color: green;
}
.add-staffs {
    width: 70%;
    margin: 50px auto;
    padding-top: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    align-items: center;
}
.add-staffs h1{
    font-size: 45px;
    font: bold;
    text-decoration: underline;
    font-weight: bold;
    padding: 10px;
}
.form-label{
    font-size: 16px;
    /* color: #000; */
    padding-right: 10px;
}
</style>
<body>
    <div class="add-staffs">
        <h1>Edit Staff</h1>
    <p class="mssg" style="color: green; font-size:18px; text:center;"> {{ session('mssg')}} </p>
    @if(Session::has('success'))
        <div class="alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <form method="POST" action="{{url('update-staff/{id}')}}" style="margin-left: 270px; padding-bottom:40px; margin-top:20px;">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="md-3">
            <label class="form-label">Name:    </label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$data->name}}">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="md-3">
            <label class="form-label">Email:    </label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
        </div>
        @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        <div class="md-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{$data->password}}">
        </div>
        @error('password')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        <div style="margin-left: 280px;" >
            <button type="submit" class="btn btn-primary">Submit</button>
            <button><a href="{{url('/staff-list')}}" class="btn btn-danger">Back</a></button>
        </div>
    </form>
    </div>
</x-app-layout>