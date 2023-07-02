<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <b>
            <h2>Buat Account Baru</h2>
        </b>
        <h4>Sign Up Form</h4>

        <form action="/welcome" method="POST">
            @csrf

            <label>First Name:</label><br><br>
            <input type="text" name="fname"><br><br>

            <label>Last Name:</label><br><br>
            <input type="text" name="lname"><br><br>

            <label>Gender:</label><br><br>
            <input type="radio" name="gender">male<br>
            <input type="radio" name="gender">female<br>
            <input type="radio" name="gender">other<br><br>

            <label>Nationally:</label><br><br>
            <select name="Bahasa">
                <option value="Indonesia" selected>Indonesia</option>

            </select><br><br>

            <label>Language Spoke:</label><br><br>
            <input type="checkbox">Bahasa Indonesia <br>
            <input type="checkbox">English <br>
            <input type="checkbox">Other <br><br>

            <label>Bio:</label><br><br>
            <textarea name="message" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="send">
        </form>
    </div>
</body>
</html>