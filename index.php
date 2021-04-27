<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahlgeah Cabus</title>
    <h3><p style="text-align:center">Web Programming Exercise</p></h3>
</head>
<style>
button 
{  
    background-color: lightblue;  
    color: black;  
    font-size: 22px;  
    margin: auto;
    display: block;  
}  </style>

<body style="background-color:powderblue;">

    <form action="controller.php" method ="post">
    <h1>Edge of Triangle</h1>
    <input type="number" name="Fedge" placeholder="First Edge" required><br>
    <input type="number" name="Sedge" placeholder="Second Edge" required><br>
    
    <h1>Binary</h1>
    <input type="number" name="binumber" placeholder="Input Number" required><br>

    <h1>Parts of Path</h1>
    <input type="text" name="part1" placeholder="First Path Number" required><br>
    <input type="text" name="part2" placeholder="Second Path Number" required><br>

    <h1>Sastry Number</h1>
    <input type="number" name="sastry1" placeholder="Sastry Number" required><br>

    <button type="submit">SUBMIT ALL</button>
    
    <p style="text-align:center">Note: Complete all the boxes.</p>


    </form>


</body>
</html>