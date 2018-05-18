<?php include 'includes/header.php' ?>
<?php 
     $id = $_GET['id'];

//DB Objects
   $db = new Database();

   //Create Query for posts
   $query = "SELECT * FROM categories WHERE id = ".$id ;

   //run query
   $category = $db->select($query)->fetch_assoc();

   //Create Query for categories
   $query = "SELECT * FROM categories";

   //run query
   $categories = $db->select($query);
?>
<?php
     if(isset($_POST['submit'])){
       //assing vars
           $name = mysqli_real_escape_string($db->link, $_POST['name']);
            //simple validation  
            if($name == '') {
              $error = 'Please fill out requried field' ;

            }   else {
                    $query = "UPDATE categories
                     SET

                              name = '$name',
                             
                              WHERE id =".$id ;

                    $update_row = $db->update($query);
            }
       }     
?>



<form role="form" method="post" action="edit_category.php?id=<?php echo $id ;?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name'];?>"> 
  </div> 
  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
  <a href="index.php" class="btn btn-primary">Cancel </a>
  <input name="delete" type="submit" class="btn btn-primary" value="Delete">
</div>
<br>
</form>

<?php include 'includes/footer.php' ?>