<?php 
include('connectDB.php');


$sql = "select m.Movie_Name , t.Type  from movies m inner join type_movie t on m.Movie_Name = t.Movie_Name where 1=1";
$sql.=" order by m.Movie_Name";
$query = mysqli_query($cid,$sql);
$result = mysqli_fetch_Array($query);
?>
<html>
<head>
<title>menupage</title>
</head>
<table >
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php $row = mysqli_num_rows($query);
            if($row==0){
                ?> <tr>
            <td colspan="8">No Result</td>
        </tr> <?php
            }else{ ?>
        <?php while($result = mysqli_fetch_Array($query)){?>
        <tr>
            <td><?php echo $result['Movie_Name']; ?></td>
            <td><?php echo $result['Type']; ?></td>
        </tr>
        <?php }?>
        <?php }
        ?>
    </tbody>
</table>
</html>