<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up</h3>
    <form action="/welcome" method="POST">
     @csrf
     <p>First Name :</p>
     <input type="text" name="first_name">   <br>
     <p>Last Name :</p>
     <input type="text" name="last_name"> <br>

     <p>Gender :</p>
     <input type="radio" name="gender" value="male">
     <label for="male">Male</label><br>
     <input type="radio" name="gender" value="female">
     <label for="male">Female</label><br><br>

     <label for="nationallity">Nationallity</label>
     <select name="nationallity" id="nationallity">
         <option value="Indonesia">Indonesia</option>
         <option value="Amerika">Amerika</option>
         <option value="Inggris">Inggris</option>
         <option value="Arab">Arab</option>
     </select><br><br>
     
     <p>Language Speaks</p>
     <input type="checkbox" name="bahasa1" id="bahasa1" value="Bahasa Indonesia">
     <label for="bahasa1">Bahasa Indonesia</label><br>
     <input type="checkbox" name="bahasa2" id="bahasa2" value="English">
     <label for="bahasa1">English</label><br>
     <input type="checkbox" name="bahasa3" id="bahasa3" value="Arabic">
     <label for="bahasa1">Arabic</label><br>

    <p>Box</p>
    <textarea name="" id="" cols="30" rows="10"></textarea> <br>

    <input type="submit" value="Daftar">
    </form>
</body>
</html>