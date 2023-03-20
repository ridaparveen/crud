<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
              <?php
              $conn = mysqli_connect("localhost","root","","new crud") or die("connection failed");
              // now add sql query and join twotables
              $sql =" SELECT * FROM students join studentclass ";

              $results = mysqli_query($conn,$sql) or die("query unsucesfull");
              while ($row = mysqli_fetch_assoc($results)) {
                // code..
               ?>
                <option value="<?php echo $row['sid']; ?>"><?php echo $row['cname']; ?></option>
              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
