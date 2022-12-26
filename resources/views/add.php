<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {text-align: center;}
            /* p {text-align: center;} */
            div {text-align: center;}
            table{border: 2px solid black; border-collapse: collapse; margin-left:auto; margin-right:auto;}
            th {border: 2px solid black; border-collapse: collapse;}
            td {border: 2px solid black; border-collapse: collapse;text-align: center;}
            tr {height: 35px;}
            button {border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;background-color: #008CBA;}
            a {color: inherit; text-decoration: inherit;}
        </style>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Management Software</title>
    </head>
    <body>
        <h1><?php echo $heading; ?></h1>
        <div>
            <form action="add" method="get">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                
                <p>Current Working Status</p>
                <input type="radio" id="active" name="status" value="1" required>       <!-- Active   -->
                <label for="active">Active</label><br>
                <input type="radio" id="inactive" name="status" value="0" required>     <!-- Inactive -->
                <label for="inactive">Inactive</label><br><br>
                
                <?php
                $today = strtotime("today")
                ?>
            <label for="joinDate">Enter Joining Date</label><br>
            <input type="date" id="joinDate" name="joinDate" max=<?php echo date("Y-m-d",$today);?> required><br><br>
            
            <label for="leaveDate">Enter Leaving Date</label><br>
            <input type="date" id="leaveDate" name="leaveDate" max=<?php echo date("Y-m-d",$today);?>><br><br>
            
            <input type="submit">
            <input type="reset">
            
        </form>
        </div>
        <div>
            <?php 

            use \Database\Seeders\DatabaseSeeder;
            use \App\Models\Employee;

            echo "<br>" ;
            if(isset($_GET['name']) && isset($_GET['status']) && isset($_GET['joinDate']) && isset($_GET['leaveDate'])):
                $name = $_GET["name"];
                $status = (int)$_GET["status"];
                $joinDate = strtotime($_GET["joinDate"]);
                $leaveDate = strtotime($_GET["leaveDate"]);

                $empl = new Employee;
                $empl->name = $name;
                $empl->joinDate = date("m/d/Y", $joinDate);
                $empl->leaveDate = date("m/d/Y", $leaveDate);
                $empl->status = $status;
                $empl->save();
            endif; 
            ?>
        </div>
        <br>
        <div>
        <a href="/"><button>Home</button></a>
        </div>
        <br>
        <br>

    </body>
</html>