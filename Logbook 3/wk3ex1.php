<html>
<head>
    <title>HTML form submitted to PHP file</title>
</head>
<body>

<form action="wk3ex1action.php" method="post">
    Enter your name
    <input type="text" name="txtname" size="30"/><br/><br/>

    Gender
    <input type="radio" name="radsex" value="male" />Male
    <input type="radio" name="radsex" value="female" />Female
    <input type="radio" name="radsex" value="other" />Other <br/><br/>

    Occupation
    <select name="seloccupation">
        <option>Lecturer</option>
        <option>Beach Bum</option>
        <option>Traffic Warden</option>
    </select><br/><br/>

    <input type="submit" value="Display">
</form>

</body>
</html
