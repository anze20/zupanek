<?php
$page_title = "Cebelarstvo Zupanek - Ali ste vedeli?";
include('includes/header.php');
if(isset($_GET['kategorija'])) {
        $category = mysqli_real_escape_string($db, $_GET['kategorija']);
        $query = "SELECT * FROM posts WHERE kategorija=$kategorija";
    }else {
    
    $query = "SELECT * FROM posts";
    }

    
    $posts = $db->query($query);

 ?>
        <div class="container">
        <div class="row">
                    <div class="box">
                        <div class="col-lg-12">
        <?php if($posts->num_rows >0) {
                while($row = $posts->fetch_assoc()){
                ?>
                
                <div class="blog-post">
            <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id'] ?>"><?php echo $row['naslov']; ?></a></h2>
            <p class="blog-post-meta"><?php echo $row['datum']; ?> by <a href="#"><?php echo $row['avtor']; ?></a></p>

            <?php $body = $row['besedilo'];
                echo substr($body, 0, 400) . "...";
                
             ?>
            
          <a href="<?php echo $row['id'] ?>" class="btn btn-primary">Preberi veè</a>
          
          </div><!-- /.blog-post -->
          <hr />

          

         <?php }} ?>
        </div>
        </div>
        </div>  
        </div>        


 <?php                          
include('includes/footer.php');
?>