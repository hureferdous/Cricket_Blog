<?php include '../config/config.php' ?>
<?php include '../libraries/Database.php' ?>

<?php include '../helpers/format_helper.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Area</title>
    <!-- Bootstrap core CSS for MyBlog -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for MyBlog -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
           <nav class="nav">
            <a class="nav-link active" href="index.php">Dashboard</a>
            <a class="nav-link" href="add_post.php">Add Post</a>
            <a class="nav-link" href="add_category.php">Add Category</a>
            <a class="nav-link pull-right" href="http://localhost/cricket_blog">Visit Cricket Blog</a>
          </nav>
        </div>
      </div>
    </header>

    

      <div class="blog-header">
        <div class="container">
             <h2>Admin Area</h2>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
             <?php if(isset($_GET['msg'])) : ?>
                   <div class="alert alert-success">
                     <?php echo htmlentities($_GET['msg']); ?>
                   </div>
                 <?php endif; ?>