
<html>
    <head>
        <link rel="stylesheet" type="text/css" href=styledisplay.css>
        <title>Display</title>
        <style>
            <body>
            <form>
            <input type="button" value="BACK" onclick="history.back()">
           </form>

                {
                    background:black;
                   

                }
                table{
                    width:90%;
                    border-collapse: collapse;
                    margin-right: auto;
                    margin-left: auto;
                    position: center;
                }
                table,th,td{
                    
                    background-color:black;
                    opacity:0.8;
                    font-family: century gothic;
                    color:white;
                    font-weight: bolder;
                    padding:2px 2px;
                    text-align: center;
                   
                }b
                h2{
                    
                   
                    color:white;
                    font-size: 30px;
                    font-weight: bold;
                    padding:50px 15px;
                    padding-bottom: 8px;
                }
                .update,.delete,.insert
                {
                    background-color: greenyellow;
                    color: black;
                    border: 0;
                    outline: none;
                    border-radius: 5px;
                    height: 20px;
                    width: 60px;
                    font-weight: bold;
                    cursor: pointer;
                    font-family: century gothic;
                    font-size: 12px;
                }
                .delete
                {
                    background-color: #ff6666;
                    
                }
                .insert
                {
                    background-color: lightseagreen;
                }
               </div> 
            </body>
            </style>
            
         
</head>
</html>



<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM donor";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);



//echo $total;;


if($total != 0)
{ 
    ?>
    <div class="displayt">
    <h2 align="center">RECORDS OF DONORS</h2>
    <center><table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="5%">DID</th>
        <th width="8%">FIRST NAME</th>
        <th width="8%">LAST NAME</th>
        <th width="4%">AGE</th>
        <th width="6%">GENDER</th>
        <th width="6%">HOUSENO</th>
        <th width="8%">LOCALITY</th>
        <th width="8%">CITY</th>
        <th width="8%">STATE</th>
        <th width="6%">PINCODE</th>
        <th width="20%">OPERATIONS</th>
        </tr>
        </div>
       
    <?php   
    
    while($result = mysqli_fetch_assoc($data))
    
        {
            echo "<tr>
            <td>".$result['did']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['age']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['houseno']."</td>
            <td>".$result['locality']."</td>
            <td>".$result['city']."</td>
            <td>".$result['state']."</td>
            <td>".$result['pincode']."</td>
            <td><a href='donor.php?id=$result[did]'><input type='submit' value='insert' class='insert'></a>
            <a href='update.php?id=$result[did]'><input type='submit' value='update' class='update'></a>
            <a href='delete.php?id=$result[did]'><input type='submit' value='delete' class='delete'></a></td>
           
          </tr>
          "; 
            
                
                
                
        }
}
else
{
    echo "no records found";
}


?>
    </table>
    </center>

 


    <html>
    <head>
        <title>Display</title>
        <style>
            <body>
                {
                    background:black;
                    
                }
                table{
                    background-color: black;
                    margin-right: auto;
                    margin-left: auto;
                }
                .update,.delete,.insert
                {
                    background-color:greenyellow;
                    color: black;
                    border: 0;
                    outline: none;
                    border-radius: 5px;
                    height: 20px;
                    width: 60px;
                    font-weight: bold;
                    cursor: pointer;
                    font-size: 12px;
                    text-align: center;
                }
                .delete
                {
                    background-color: #ff6666;
                    
                }
                .insert
                {
                    background-color: lightseagreen;
                }
                
            </body>
            </style>
            
         
</head>
</html>



<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM employee";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);



//echo $total;;


if($total != 0)
{ 
    ?>
    <h2 align="center">RECORDS OF EMPLOYEES</h2>
    <center><table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="5%">eid</th>
        <th width="8%">ename</th>
        <th width="4%">age</th>
        <th width="10%">phone</th>
        <th width="6%">houseno</th>
        <th width="8%">locality</th>
        <th width="8%">city</th>
        <th width="8%">state</th>
        <th width="6%">pincode</th>
        <th width="19%">operations</th>
        </tr>
       
    <?php   
    
    while($result = mysqli_fetch_assoc($data))
    
        {
            echo "<tr>
            <td>".$result['eid']."</td>
            <td>".$result['ename']."</td>
            <td>".$result['age']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['houseno']."</td>
            <td>".$result['locality']."</td>
            <td>".$result['city']."</td>
            <td>".$result['state']."</td>
            <td>".$result['pincode']."</td>
            <td><a href='employee.php?id=$result[eid]'><input type='submit' value='insert' class='insert'></a>
            <a href='empupdate.php?id=$result[eid]'><input type='submit' value='update' class='update'></a>
            <a href='empdelete.php?id=$result[eid]'><input type='submit' value='delete' class='delete'></a></td>
           
          </tr>
          ";        
                
        }
}
else
{
    echo "no records found";
}


?>
    </table>
    </center>

 


   