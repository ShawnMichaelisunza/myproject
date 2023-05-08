
<?php

include('db_connect/connect.php');


// write query from database

$sql = "SELECT * FROM add_project ORDER BY current_t";

// make query & get result

$result = mysqli_query($conn, $sql);

// fetch the resultiing rows an array

$requests = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory

mysqli_free_result($result);

// close connection

mysqli_close($conn);


?>



<!DOCTYPE html>
<html lang="en">

<?php include('navbar/header.php')?>

<br>
<br>
    <div class="container"> 
            <div class="MRF">
                <div class="MRF-table">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Date & Time</th>
                            <th scope="col">No.</th>
                            <th scope="col">Last name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Gender</th>
                            </tr>
                        </thead>
                        <?php foreach($requests as $mrf){?>
                            <tr>
                            <td><?php echo htmlspecialchars($mrf['current_t'])?></td>
                            <th scope="row" name="id"><?php echo htmlspecialchars($mrf['id'])?></th>
                            <td><?php echo htmlspecialchars($mrf['l_name'])?></td>
                            <td><?php echo htmlspecialchars($mrf['f_name'])?></td>
                            <td><?php echo htmlspecialchars($mrf['email'])?></td>
                            <td><?php echo htmlspecialchars($mrf['contact'])?></td>
                            <td><?php echo htmlspecialchars($mrf['gender'])?></td>
                            <td><button type="button"  class="btn btn-success">
                            <a name="edit" href="update.php?id=<?php echo htmlspecialchars($mrf['id'])?>">Update</a></button></td>
                            <td><button type="button"  class="btn btn-success">
                            <a name="edit" href="update.php?id=<?php echo htmlspecialchars($mrf['id'])?>">View</a></button></td>
                            </tr>
                            <?php }?>
                    </table>
                </div>
            </div>





<?php include('navbar/footer.php')?>
</html>