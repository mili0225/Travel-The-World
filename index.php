<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>




    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .container {
            background-color: #e0f7fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            max-width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            color: #d9534f;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    

</head>
<body>

<h1>Registration Form</h1><br>
            <form action="register.php" method="post">
                
                    <label for="name">Enter name:</label><br>
                    <input type="text"  id="name" name="name"><br>
                
                    <label for="city">enter city:</label><br>
                    <input type="text" id="city" name="city"><br>
                
                    <label for="mobile">mobile</label><br>
                    <input type="number" id="mobile" name="mobile"><br>
                
                <input type="submit" value="submit">
            </form>
   
              
    
</body>
</html>