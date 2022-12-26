<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {text-align: center;}
            h3 {text-align: center;}
            p {text-align: center;}
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
        <h1>{{$heading}}</h1>
        <br>
        <div>
            <a href="/add"><button>Register Employee</button></a>
        </div>
        <br>
        <br>

        @if(count($employees) == 0)
        <h3>No Employees Registered</h3>
        @endif
        
        @if(count($employees) != 0)
            <table>
                <tr>
                    <th width="30px">ID</th>
                    <th width="130px">Name</th>
                    <th width="85px">Join Date</th>
                    <th width="85px">Leave Date</th>
                    <th width="105px">Active Status</th>
                </tr>
            @foreach ($employees as $employee)
                <?php
                    $start = strtotime($employee['joinDate']);
                    $end = strtotime("+5 years", $start);
                    $today = strtotime("today");
                ?>
                @if($employee['status'] == 0)
                    <tr>
                        <td>{{$employee['id']}}</a></td> 
                        <td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        <td>{{date("d/m/Y", $start)}}</td>
                        <td>{{$employee['leaveDate']}}</td>
                        <td>Inactive</td> 
                    </tr>    
                @endif
                @if($employee['status'] == 1)
                    @if($end <= $today)
                    <tr bgcolor="#009f00">
                        <td>{{$employee['id']}}</a></td> 
                        <td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        <td>{{date("d/m/Y", $start)}}</td>
                        <td>-</td>
                        <td>Active</td>  
                    </tr>  
                    @endif
                    @if($end > $today)
                    <tr>
                        <td>{{$employee['id']}}</a></td> 
                        <td><a href = "/employee/{{$employee['id']}}">{{$employee['name']}}</td>
                        <td>{{date("d/m/Y", $start)}}</td>
                        <td>-</td>
                        <td>Active</td>  
                    </tr>  
                    @endif 
                @endif
            @endforeach
            </table>
        @endif

    </body>
</html>