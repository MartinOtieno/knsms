<x-app-layout>
<link rel="stylesheet" href="main.css">
<section id="donor" class="donor">
    <div class="wrapper-donors">
        <form action="/donors" method="POST" class="donation-form">
            @csrf
        <img src="/images/kibulogo.png" alt="logo" class="logo-form">
        <h1>Please fill this Form</h1>
        <fieldset class="donor-details">
        
        <label for="name">First name:</label>
        <input type="text" id="first_name" name="first_name" required class="required">
        <label for="name">Middle name:</label>
        <input type="text" id="middle_name" name="middle_name">
        <label for="name">Last name:</label>
        <input type="text" id="last_name" name="last_name" required class="required"><br>
        <label for="name">Your donor id:</label>
        <input type="text" id="donor_id" name="donor_id" required class="required"  style="margin-right: 50px;">
        <label for="gender">Select your gender:</label>
        {{-- <input type="radio" id="male" style="margin-left: 10px;" value="male"> --}}
       {{-- <label for="gender" style=" margin-right:5px;">Select Gender:</label> --}}
            <input type="radio" id="male" name="gender" value="male">
            <label for="male" style="margin-right: 10px;">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="margin-right: 10px;">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other" style="margin-right: 10px;">Others</label><br>
        <label for="email" >Email:</label>
        <input type="email" id="email" name="email" required class="required">
        <label for="phone">Enter phone number:</label>
        <input type="tel" id="phone" name="phone_no" pattern="(07|01)\d{8}" minlength="10" maxlength="10" placeholder="07XXXXXXXX or 01XXXXXXXX" required class="required">
        <label for="address">Enter your Postal Address:</label>
        <textarea id="address" name="address" rows="1" cols="20" placeholder="P.O Box 0123-12345" required class="required"></textarea><br>
        <label for="accountNumber">Enter your city:</label>
        <input type="text" id="city" name="city" placeholder="Nairobi-Kenya" required class="required">
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required class="required">
        <label for="nationality">Enter National Id:</label>
        <input type="number" id="national_id" name="national_id" required class="required"><br>
        <label for="donated_amount">Your Occupation:</label>
        <input type="text" id="occupation" name="occupation">
        <label for="company">Place of Employment:</label>
        <input type="text" id="company" name="company"><br>
        <label for="donated_date">Enter Date of donation:</label>
        <input type="date" id="donated_date" name="donated_date" required class="required">
        <label for="donated_amount">Enter the Amount:</label>
        <input type="number" id="donated_amount" name="donated_amount" required class="required">
        {{-- <input type="number" id="donated_amount" name="donated_amount" required class="required"> --}}
        
        </fieldset>
        
        <div class="button-form1">
            <button onclick="window.location.href='http://localhost/knsms2024/mpesa.php'" id="clearButton" style="margin-left: 250px">Deposit Now</button>
        <button id="clearButton">Clear All</button>
        <input type="submit" value="Submit">
        </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const clearButton = document.getElementById('clearButton');
            const inputs = document.querySelectorAll('inputs');

            clearButton.addEventListener('click', function() {
                inputs.forEach(inputs => {
                    input.value = '';
                });
            });
        });
    </script>
</section>
</x-app-layout>