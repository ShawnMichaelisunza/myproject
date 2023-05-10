
<?php 

include('db_connect/connect.php');


// check GET request id param
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql ="SELECT * FROM add_project WHERE id= $id";
    
    //get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $details = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>



<!DOCTYPE html>
<html lang="en">

<?php include('navbar/header.php')?>

<br>
<br>
    <div class="container"> 
          <div class="det-btn">
            <button>Print</button>
          </div>
          <div>
            <table border = 1 cellspacing = 0 cellpadding = 10>
                <?php if($details):?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php 
                        include('db_connect/connect.php');

                        $sql = "SELECT pictures FROM add_project";
                        $res = mysqli_query($conn,  $sql);

                        if (mysqli_num_rows($res) > 0) {
          	                while ($images = mysqli_fetch_assoc($res)) {  ?>
             
                        <div class="row mb-3">
             	            <img src="img/<?=$images['pictures']?>" style="width:100%" >
                        </div>
          		
                    <?php } }?> </td>
                    </tr>
                <?php endif ?>
            </table>
          </div>
    </div>





<?php include('navbar/footer.php')?>
</html>