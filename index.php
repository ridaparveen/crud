<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <!-- add php -->
    <?php
    $conn = mysqli_connect("localhost","root","","new crud") or die("connection failed");
    // now add sql query and join twotables
    $sql =" SELECT * FROM students join studentclass WHERE students.sclass =studentclass.sid";

    $results = mysqli_query($conn,$sql) or die("query unsucesfull");
    if (mysqli_num_rows($results)>0) {
      // code...


     ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc(  $results)) {
            // code...


           ?>
            <tr>
                <td><?php echo $row['sid'] ; ?></td>
                <td><?php echo $row['sname'] ; ?></td>
                <td><?php echo $row['saddress'] ; ?></td>
                <td><?php echo $row['cname'] ; ?></td>
                <td><?php echo $row['sphone'] ; ?></td>
                <td>
                    <a href='edit.php?id%20 =<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
          <?php } ?>


        </tbody>
    </table>
  <?php }else{
  echo "<h2>no records found</h2>";}
  mysqli_close($conn);?>
</div>
</div>
</body>
</html>
