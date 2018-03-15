<?php include 'includes/header.php' ?>

<form role="form" method="post" action="edit_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">  
  </div>
   <div class="form-group">
    <label>Post Body</label>
    <input name="body" type="text" class="form-control" placeholder="Enter Post Body">
  </div>
   <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <option>News</option>
       <option>Events</option>
    </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author">  
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">  
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-primary" value="Submit">
  <a href="index.php" class="btn btn-primary">Cancel </a>
  <input name="delete" type="submit" class="btn btn-primary" value="Delete">
</div>
</form>

<?php include 'includes/footer.php' ?>