<?php

//connecting the database
require("db_connection.php");

  $product_id = $_REQUEST['product_id'];

  $sql = "SELECT * FROM user INNER JOIN product ON user.user_id = product.user_id WHERE product_id='$product_id'";

  //executing the SQL command
  $rs = $mysqli->query($sql);


  if(mysqli_num_rows($rs) > 0){

    //fetching the records
    $row = mysqli_fetch_assoc($rs);


 ?>

<div class="alert alert-light" role="alert">
  <div class="image">
    <img src="images/large/<?php echo $row['picture'];?>" alt="" style="width:100%; height:auto;">
  </div>

  <div class="details">
    <p style="margin-top:15px;">Product Information</p>
    <table>
      <tbody>
        <tr>
          <th>Name</th>
          <th>-</th>
          <td><?php echo $row['product_name']; ?></td>
        </tr>
        <tr>
          <th>Condition</th>
          <th>-</th>
          <td><?php echo $row['product_condition']; ?></td>
        </tr>
        <tr>
          <th>Description</th>
          <th>-</th>
          <td><?php echo $row['description']; ?></td>
        </tr>
        <tr>
          <th>Category</th>
          <th>-</th>
          <td><?php echo $row['category']; ?></td>
        </tr>
      </tbody>
    </table>

    <hr>
    <p>Contact Information</p>
    <table>
      <tbody>
        <tr>
          <th>For Trade by</th>
          <th>-</th>
          <td><?php echo $row['user_first_name']; ?> <?php echo $row['user_last_name']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <th>-</th>
          <td><?php echo $row['user_id']; ?></td>
        </tr>
        <tr>
          <th>Contact Number</th>
          <th>-</th>
          <td><?php echo $row['mobile_number']; ?></td>
        </tr>
      </tbody>
    </table>

  </div>
</div>
 

<?php
  }
?>
