<!-- Authors: Matt Miss & Mason Sain
    Date: 4/4/24
    Url: http://mattmiss.greenriverdev.com/SDEV328/cupcakes
    Description:
    -->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form action="process.php" method="POST">
        <Label for="name">Your Name:</Label>
        <input type="text" id="name" name="name"/>
        <br>
        <label for="cupcake-flavors">Cupcake flavors:</label>
        <br>
        <input type="checkbox" id="flavor1" name="flavor[]" value="The Grasshopper">
        <label for="flavor1"> The Grasshopper</label><br>
        <input type="checkbox" id="flavor2" name="flavor[]" value="Whiskey Maple Bacon">
        <label for="flavor2"> Whiskey Maple Bacon</label><br>
        <input type="checkbox" id="flavor3" name="flavor[]" value="Carrot Walnut">
        <label for="flavor3"> Carrot Walnut</label><br>
        <input type="checkbox" id="flavor4" name="flavor[]" value="Salted Caramel Cupcake">
        <label for="flavor4"> Salted Caramel Cupcake</label><br>
        <input type="checkbox" id="flavor5" name="flavor[]" value="Red Velvet">
        <label for="flavor5"> Red Velvet</label><br>
        <input type="checkbox" id="flavor6" name="flavor[]" value="Lemon Drop">
        <label for="flavor6"> Lemon Drop</label><br>
        <input type="checkbox" id="flavor7" name="flavor[]" value="Tiramisu">
        <label for="flavor7"> Tiramisu</label><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>