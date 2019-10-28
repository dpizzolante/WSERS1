<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        main {
            margin: auto;
            width: 50%;
            border: 3px solid red;
            padding: 50px;
            text-align: left;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <?php
        if (isset($_POST['BUTTON_submit']))
        {
            echo '<pre>' . print_r($_POST, true) . '</pre>';
        }
        ?>

        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
            <h1>Enter 5 numbers</h1><br>
            <label for="data1">Number 1: </label><input type="text" id="data1" name="DATA_numbers[]"><br>
            <label for="data2">Number 2: </label><input type="text" id="data2" name="DATA_numbers[]"><br>
            <label for="data3">Number 3: </label><input type="text" id="data3" name="DATA_numbers[]"><br>
            <label for="data4">Number 4: </label><input type="text" id="data4" name="DATA_numbers[]"><br>
            <label for="data5">Number 5: </label><input type="text" id="data5" name="DATA_numbers[]"><br>
            <button name="BUTTON_submit">Submit</button>
        </form>
    </main>


</body>
</html>