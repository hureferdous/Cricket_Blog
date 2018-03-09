</div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
            <?php if ($categories) : ?>
                 <ol class="list-unstyled">
                    <?php while($row = $categories->fetch_assoc()) : ?>
                          <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                    <?php endwhile; ?> 
            </ol>
          <?php else: ?>
             <p>There is no categories yet!!!</p>
            <?php endif; ?> 
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Cricket Lovers &copy; 2017 </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    
    <script src="js/bootstrap.min.js" type="javascript"></script>
  </body>
</html>