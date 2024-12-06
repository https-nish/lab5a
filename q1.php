<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid #000;
            padding: 8px;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Ahmad Danish Adly bin Md Puad"; 
        $matricNumber = "XXXXXX"; // Replace with your matric number
        $course = "Bachelor of Computer Science (Information Security)";
        $yearOfStudy = "Year 3";
        $address = "Batu Pahat, Johor";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
