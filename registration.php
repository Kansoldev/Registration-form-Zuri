<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
    </head>

    <body>
        <h1>User Registration Form</h1>

        <form action="user_data.php" method="POST">
            <div style="margin-bottom: 14px;">
                <label for="name">Name</label> <br />
                <input type="text" name="name" id="name" />
            </div>

            <div style="margin-bottom: 14px;">
                <label for="email">Email Address</label> <br />
                <input type="text" name="email" id="email" />
            </div>
            
            <div style="margin-bottom: 14px;">
                <label for="dob">Date of birth</label> <br />
                <input type="date" name="dob" id="dob" />
            </div>

            <div style="margin-bottom: 14px;">
                <label>Gender</label> <br />
                <input type="radio" name="gender" value="male" /> Male 
                <input type="radio" name="gender" value="female" /> Female
            </div>

            <div style="margin-bottom: 14px;">
                <label for="country">Country</label> <br />
                <select name="country" id="country">
                    <option value="nigeria">Nigeria</option>
                    <option value="ghana">Ghana</option>
                    <option value="algeria">Algeria</option>
                    <option value="cameroun">Cameroun</option>
                </select>
            </div>

            <button type="submit">Register</button>
        </form>    
    </body>
</html>