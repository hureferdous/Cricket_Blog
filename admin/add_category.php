<?php include 'includes/header.php' ?>
<?php 
        //DB Objects
         $db = new Database();

      if(isset($_POST['submit'])){
       //assing vars
           $name = mysqli_real_escape_string($db->link, $_POST['name']);
          
            //simple validation  
            if($name == '' ) {
              $error = 'Please fill out requried field' ;

            }   else {
                    $query = "INSERT INTO categories
                    (name)
                    VALUES('$name')" ;

                    $update_row = $db->update($query);
            }
}
?>

<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category"> 
  </div> 
  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
  <a href="index.php" class="btn btn-primary">Cancel </a>
</div>
<br>
</form>

<?php include 'includes/footer.php' ?>