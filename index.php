<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="h1-container">
        <h1>Registration Form</h1>
    </div>

    <form class="form-container" action="submitted_information.php" method="POST">

<fieldset style="width: 800px;">
    <legend class="legend01-container">Personal Information</legend>

    <br>
    <div class="form01-container">

        <div class="form01-group">
            <label class="form-label">First Name</label>
            <input type="text" name="firstName" placeholder="First Name" maxlength="30" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Middle Name</label>
            <input type="text" name="middleName" placeholder="Middle Name" maxlength="30" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Surname</label>
            <input type="text" name="lastName" placeholder="Last Name" maxlength="30" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Suffix</label>
            <input type="text" name="suffix" placeholder="(Jr., Sr., III, optional)" maxlength="5" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Address</label>
            <input type="text" name="address" placeholder="Full Address" maxlength="50" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" placeholder="Phone Number" oninput="this.value=this.value.replace(/[^0-9]/g,'')" maxlength="11" required>
        </div>

        <div class="form01-group">
            <label class="form-label">LRN</label>
            <input type="text" name="lrn" placeholder="Learner Reference Number" oninput="this.value=this.value.replace(/[^0-9]/g,'')" pattern="[0-9]+" inputmode="numeric" maxlength="12" required>
        </div>
        
        <div class="form01-group">
            <label class="form-label">Age</label>
            <input type="date" name="age" placeholder="Age" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Civil Status</label>

            <select name="civilStatus" required>
                <option value="">Select Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
            </select>
        </div>

        <div class="form01-group">
            <label class="form-label">Nationality</label>
            <input type="text" name="nationality" placeholder="Nationality" maxlength="15" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Religion</label>
            <input type="text" name="religion" placeholder="Religion" maxlength="15" required>
        </div>

        <div class="form01-group">
            <label class="form-label">Gender</label>


            <div class="radio-group">
                
                <label>
                    Male
                    <input type="radio" name="gender" value="male" required>
                </label>

                <label>
                    Female
                    <input type="radio" name="gender" value="female" required>
                </label>
            </div>
        </div>

    </div>

</fieldset>


<style>
    .h1-container {
    text-align: center;
    font-family: monospace;
    font-size: 18px;
    }

    .form-container {
        display: flex;
        justify-content: center;
    }

    .legend01-container{
        text-align: center;
        font-family: monospace;
        font-weight: 700;
        letter-spacing: 3px;
        font-size: 18px;
    }

    .form01-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .form01-group {
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-size: 15px;
        font-family: monospace;
        margin-bottom: 5px;
    }

    input {
        width: 250px;
        height: 25px;
    }

    input::placeholder{
        text-align: center;
    }
    input[type="date"] {
        text-align: center;
    }
    .radio-group {
        display: flex;
        padding-top: 5px;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .radio-group label {
        display: flex;
        align-items: center;
        gap: 3px;
        font-size: 15px;
    }

    input[type="radio"] {
        width: auto;
        height: auto;
        transform: scale(1);
    }

    select{
        width: auto;
        height: 29px;
        text-align: center;
    }

</style>
</body>
</html>