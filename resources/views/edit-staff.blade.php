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
}
.form-label {
    margin-bottom: 5px;
}
.form-control {
    width: 100%;
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
</style>
<body>
    <div class="add-staffs">
        <h2>Edit Student</h2>
    <p class="mssg" style="color: green; font-size:30px;"> {{ session('mssg')}} </p>
    {{-- @if(Session::has('success'))
        <div class="alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif --}}
    <form method="POST" action="{{url('update-staff/{id}')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="md-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$data->name}}">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="md-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
        </div>
        @error('email')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        <div class="md-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{'$data->password'}}">
        </div>
        @error('password')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/staff-list')}}" class="btn btn-danger">Back</a>
    </form>
    </div>
</x-app-layout>