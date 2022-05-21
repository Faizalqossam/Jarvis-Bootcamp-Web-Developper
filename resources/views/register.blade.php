<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <div>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method="get">
            <div>
                <label for="">First Name :</label>
                <br>
                <br>
                <input type="text" name="firstname">
            </div>
            <br>
            <div>
                <label for="">Last Name :</label>
                <br>
                <br>
                <input type="text" name="lastname">
            </div>
            <br>
            <div>
                <label for="">Gender :</label>
                <br>
                <br>
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="radio" name="gender" value="female"> Male
                <br>
                <input type="radio" name="gender" value="other"> Other
            </div>
            <br>
            <div>
                <label for="">Nationality</label>
                <br>
                <br>
                <select name="" id="">
                    <option value="indonesia">Indonesia</option>
                    <option value="inggris">Inggris</option>
                    <option value="sunda">Sunda</option>
                </select>
            </div>
            <div>
                <p>Langueage Spoken :</p>
                <input type="checkbox"> I have a bike
                <br>
                <input type="checkbox"> I have a car
                <br>
                <input type="checkbox"> I have a boat
            </div>
            <div>
                <p>Bio :</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <a href="/welcome"><button>Sign Up</button></a>
    </div>
    </form>
</body>

</html>