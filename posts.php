<?php include 'includes/header.php'?>
<?php 
    //DB Objects
   $db = new Database();

   // check url for category
   if(isset($_GET['category'])){
    $category= $_GET['category'];
    //Create Query for posts
   $query = "SELECT * FROM posts  WHERE category = ".$category;

   //run query
   $posts = $db->select($query);
   }

    else{
      //Create Query for posts
   $query = "SELECT * FROM posts ";

   //run query
   $posts = $db->select($query);
    }

   //Create Query for categories
   $query = "SELECT * FROM categories";

   //run query
   $categories = $db->select($query);
?>

<?php if($posts) : ?>
   <?php while($row = $posts->fetch_assoc()) : ?>
       <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?>
            <a href="#"><?php echo $row['author']; ?></a></p>
            <p> <?php echo shortenText( $row['body']);  ?>  </p>   
            <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>" >Read More </a>
       </div><!-- /.blog-post -->   
<?php endwhile; ?>
    

<?php else :?>
     <p>There are no cricket post yet</p>  
<?php endif ; ?>            
       
                
<?php include 'includes/footer.php' ?>        

       