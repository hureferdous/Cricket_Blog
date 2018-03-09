<?php include 'config/config.php' ?>
<?php include 'libraries/Database.php' ?>

<?php include 'helpers/format_helper.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cricket Blog Posts</title>
    <!-- Bootstrap core CSS for MyBlog -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for MyBlog -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
           <nav class="nav">
            <a class="nav-link active" href="index.php">Cricket Blog</a>
            <a class="nav-link" href="posts.php">Posts</a>
            <a class="nav-link" href="#">All Categories</a>
            <a class="nav-link" href="#">Login</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="#">About</a>
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">

         <img src="images/logo.jpg" id="logo" alt="Blog Logo" />
          

          <p class="lead blog-description">The blog for the Cricket Lover to get latest news about Cricket World.</p>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
