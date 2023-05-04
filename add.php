<?php include('db_connect/connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php include('navbar/header.php')?>
<br>
<div class="add-form container">
    <h1 class="text-danger" style="text-align: start;">Add Contract</h1>
<br>

  <form action="add.php" method="post">
  <h3 style="text-align: left;">Personal Data</h3>
  <div class="form-width">
      <div class="perent">
      <label for="">Last name</label>
      <input type="text" name="l-name" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['l-name'])?></div>
      </div>
      <div class="perent">
      <label for="">First name</label>
      <input type="text" name="f-name" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['f-name'])?></div>
      </div>
      <div class="perent">
      <label for="">Middle name</label>
      <input type="text" name="m-name" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['m-name'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Birth Place</label>
      <input type="text" name="b-place" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['b-place'])?></div>
      </div>
      <div class="perent">
      <label for="">Religion</label>
      <input type="text" name="religion" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['religion'])?></div>
      </div>
      <div class="perent">
      <label for="">Picture ( 2x2 )</label>
      <input type="hidden" name="filename">
      <input type="file" name="picture" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['picture'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent">
      <label for="">Email</label>
      <input type="email" name="email" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['email'])?></div>
      </div>
      <div class="perent">
      <label for="">Contact No.</label>
      <input type="number" name="contact" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['contact'])?></div>
      </div>
      <div class="perent" style="display: flex; flex-direction: column;">
      <label for="">Gender</label>
      <select name="gender" id="">
        <option value=""></option>
        <option value="male">Male</option>
        <option value="male">Female</option>
      </select>
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['gender'])?></div>
      </div>
    </div>
    <br>

    <div class="form-width">
      <div class="perent-1">
      <label for="">Address</label>
      <input type="text" name="address" id="" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['address'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Date of Birth</label>
      <input type="date" name="bday" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['bday'])?></div>
      </div>
  </div>
  <br>
  <h3>Educational Background</h3>

  <div class="form-width">
      <div class="perent-1">
      <label for="">Elementary</label>
      <input type="text" name="elem" id="" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['elem'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="y-grad" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['y-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">High School</label>
      <input type="text" name="high-s" id="" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['high-s'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="y-grad" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['y-grad'])?></div>
      </div>
  </div>
  <br>
  <div class="form-width">
      <div class="perent-1">
      <label for="">College</label>
      <input type="text" name="college" id="" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['college'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Year Graduated</label>
      <input type="date" name="y-grad" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['y-grad'])?></div>
      </div>
  </div>
  <br>
  <h3>Employment Records</h3>
  <div class="form-width">
      <div class="perent-1">
      <label for="">Company name</label>
      <input type="text" name="comp-name" id="" >
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name'])?></div>
      </div>
      <div class="perent">
      </div>
      <div class="perent">
      <label for="">Postion</label>
      <input type="text" name="position" id="">
      <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position'])?></div>
      </div>
  </div>
  <br>
    <div class="form-width">
        <div class="perent-1">
        <label for="">Company name</label>
        <input type="text" name="comp-name-1" id="" >
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['comp-name-1'])?></div>
        </div>
        <div class="perent">
        </div>
        <div class="perent">
        <label for="">Postion</label>
        <input type="text" name="position-1" id="">
        <div style="font-size: 13px; color: blue;"><?php echo htmlspecialchars($error['position-1'])?></div>
        </div>
    </div>
<br>
    <div class="btn-form">    
      <button type="submit" name="form-submit" class="btn btn-outline-success">Submit</button>
      <button type="reset" name="cancel" class="btn btn-outline-danger">Cancel</button>
    </div>
  </div>
  </form>
  <br>


</div>



<?php include('navbar/footer.php')?>
</html>