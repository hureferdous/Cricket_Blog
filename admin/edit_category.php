<?php include 'includes/header.php' ?>

<form role="form" method="post" action="edit_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category"> 
  </div> 
  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
  <a href="index.php" class="btn btn-primary">Cancel </a>
  <input name="delete" type="submit" class="btn btn-primary" value="Delete">
</div>
<br>
</form>

<?php include 'includes/footer.php' ?>