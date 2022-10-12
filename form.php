<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url(https://media.istockphoto.com/photos/abstract-shiny-surface-white-gray-background-picture-id1341630209?b=1&k=20&m=1341630209&s=170667a&w=0&h=i3UW_Rkj6tbmuAsWYzUQmybJIuFSF30ikoEN7cPCmek=);
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            text-align: center;
            width: 80%;
            margin-top: 2%;
            /* color: white;  */
            font-size: 2em;
        }

        .title {
            margin: 20px;
        }

        .register-form {
            text-align: center;
            width: 70%;
            margin: 50px;
            padding: 0px;
        }

        label {
            font-size: 1.4em;
            font-weight: 900;
            width: 40%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input {
            margin: 15px 0px;
            width: 60%;
            height: 35px;
            border-radius: 6px;
        }

        button {
            margin: 25px;
            height: 40px;
            width: 45%;
            font-weight: bold;
            background-color: blue;
            color: white;
            font-size: 20px;
            border-radius: 10px;
        }

        select {
            height: 3.3em;
            margin-right: 10em;
        }
    </style>
</head>

<body>
    <div class="title">
        <h2>Register Here!!!</h2>
    </div>
    <div class="register-form">
        <form action="./user_data.php" method="post">
            <label for="Name">Name:
                <input type="text" name="Name" id="Name" /> </label><br />
            <label for="email">Email:
                <input type="email" name="email" id="email" placeholder="user@email.com" /> </label><br />
            <label for="dob">Date Of Birth:
                <input type="date" name="dob" id="dob" /> </label><br />
            <label for="gender">Gender:
            </label><select name="gender" id="gender">
                <option value="selected" selected disabled>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br />
            <label for="country">Country:
                <input type="country" name="country" id="country" /></label>
            <button type="submit" name="submit" id="submit">Register</button>
        </form>
    </div>
</body>

</html>