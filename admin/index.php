<?php include 'includes/header.php' ?>
<?php 
   //create database object
   $db = new Database;
   //create qurey
   $query = "SELECT posts.* , categories.name FROM posts INNER JOIN categories ON 
             posts.category = categories.id ";
   //run query
   $posts = $db->select($query);
?>

  <div class="container">

        <table class="table table-striped">
  <thead>
    <tr>
      <th >Post Id </th>
      <th >Post Title</th>
      <th >Author</th>
      <th >Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php while($row = $posts->fetch_assoc()) :?>
      <td><?php echo $row['id']; ?></td>
      <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo formatDate($row['date']); ?></td>
      </tr>
    <?php endwhile; ?>
      
    
  </tbody>
</table>

 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Category Id </th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

</div>

<?php include 'includes/footer.php' ?>

       