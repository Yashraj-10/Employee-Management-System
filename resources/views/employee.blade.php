<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
            table{border: 2px solid black; border-collapse: collapse; margin-left:auto; margin-right:auto;}
            th {border: 2px solid black; border-collapse: collapse;}
            td {border: 2px solid black; border-collapse: collapse;text-align: center;}
            tr {height: 35px;}
        </style>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Management Software</title>
    </head>
    
    <body>
        <h1>{{$heading}}</h1>

            <table>
                <?php
                    $start = strtotime($employee['joinDate']);
                    $end = strtotime("+5 years", $start);
                    $today = strtotime("today");
                ?>
                @if($employee['status'] == 0)
                        <tr>
                        <th width="105px">ID</th><td width="130 px">{{$employee['id']}}</a></td>
                        </tr> 
                        <tr>
                        <th>Name</th><td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        </tr>
                        <tr>
                        <th>Join Date</th><td>{{date("d/m/Y", $start)}}</td>
                        </tr>
                        <tr>
                        <th>Active Status</th><td>Inactive</td>
                        </tr>   
                        <tr>
                        <th>Leave Date</th><td>{{$employee['leaveDate']}}</td>
                        </tr>
                @endif
                @if($employee['status'] == 1)
                    @if($end <= $today)
                        <tr bgcolor="#009f00">
                        <th width="105px">ID</th><td width="130 px">{{$employee['id']}}</a></td>
                        </tr> 
                        <tr bgcolor="#009f00">
                        <th>Name</th><td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        </tr>
                        <tr bgcolor="#009f00">
                        <th>Join Date</th><td>{{date("d/m/Y", $start)}}</td>
                        </tr>
                        <tr bgcolor="#009f00">
                        <th>Leave Date</th><td>Still Working with the Firm</td>
                        </tr>
                        <tr bgcolor="#009f00">
                        <th>Active Status</th><td>Active</td>
                        </tr>  
                    @endif
                    @if($end > $today)
                        <tr>
                        <th width="105px">ID</th><td width="130 px">{{$employee['id']}}</a></td>
                        </tr> 
                        <tr>
                        <th>Name</th><td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        </tr>
                        <tr>
                        <th>Join Date</th><td>{{date("d/m/Y", $start)}}</td>
                        </tr>
                        <tr>
                        <th>Leave Date</th><td>Still Working with the Firm</td>
                        </tr>
                        <tr>
                        <th>Active Status</th><td>Active</td>
                        </tr>
                    @endif 
                @endif
            </table>

    </body>
</html>