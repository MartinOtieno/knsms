<x-app-layout>
<link rel="stylesheet" href="main.css">
<section id="donor" class="donor">
    <div class="wrapper-donors">
        <form action="/donors" method="POST" class="donation-form">
            @csrf
        <img src="/images/kibulogo.png" alt="logo" class="logo-form">
        <h1 style="align-content: center; font-size:30px; text-docoration:underline; padding:20px;">Contribution Form</h1><hr>
        <fieldset class="donor-details">
        <label for="name">First name:</label>
        <input type="text" id="first_name" name="first_name" required class="required">
        <label for="name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name">
        <label for="name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required class="required"><br>
        <label for="name">Your Donor Id:</label>
        <input type="text" id="donor_id" name="donor_id" required class="required"  style="margin-right: 50px;">
        <label for="gender">Select Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
            <label for="male" style="margin-right: 10px;">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" style="margin-right: 10px;">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other" style="margin-right: 10px;">Others</label><br>
        <label for="email" >Email:</label>
        <input type="email" id="email" name="email" required class="required">
        <label for="phone">Enter Phone Number:</label>
        <input type="tel" id="phone" name="phone_no" pattern="(07|01)\d{8}" minlength="10" maxlength="10" placeholder="07XXXXXXXX or 01XXXXXXXX" required class="required">
        <label for="address">Enter Postal Address:</label>
        <textarea id="address" name="address" rows="1" cols="20" placeholder="P.O Box 0123-12345" required class="required"></textarea><br>
        <label for="accountNumber">Enter City:</label>
        <input type="text" id="city" name="city" placeholder="Nairobi-Kenya" required class="required">
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required class="required">
        <label for="nationality">Enter National Id:</label>
        <input type="number" id="national_id" name="national_id" required class="required"><br>
        <label for="occupation">Your Occupation:</label>
        <input type="text" id="occupation" name="occupation">
        <label for="company">Place of Employment:</label>
        <input type="text" id="company" name="company">
        <label for="donated_date">Enter Date of Donation:</label>
        <input type="date" id="donated_date" name="donated_date" required class="required"><br>
        <label for="donated_amount">Enter the Amount:</label>
        <button onclick="window.location.href='http://localhost/knsms/mpesa.php'" required class="required" style="background-color: grey; padding:8px; color:#fff;">Deposit Now</button>
        {{-- <input type="number" id="donated_amount" name="donated_amount" required class="required" > --}}
        </fieldset>
        <div class="button-form1">
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