<?php
$page_title = "Cebelarstvo Zupanek - Ali ste vedeli?";
include('includes/header.php');
/**
 * if(isset($_GET['kategorija'])) {
 *         $category = mysqli_real_escape_string($db, $_GET['kategorija']);
 *         $query = "SELECT * FROM posts WHERE kategorija=$kategorija";
 *     }else {
 */
    
    $query = "SELECT * FROM posts ORDER BY id DESC";
/**
 *     }
 */
    
    $posts = $db->query($query);

    /**
 * if(!isset($_SESSION['username'])){
 *             header("Location: login.php");
 *             return;
 *         }
 */
    

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
            <p class="blog-post-meta">Objavil <?php echo $row['avtor']; ?> <?php echo $row['datum']; ?> </a></p>

            <?php $body = $row['besedilo'];
                echo substr($body, 0, 400) . "...";
                
             ?>
            
          <a href="<?php echo $row['id'] ?>" class="btn btn btn-link">Ve&#269</a>

          
          </div><!-- /.blog-post -->
          <hr />

          

         <?php }} ?>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
                          
            <form action="post.php" method="post" enctype="multipart/form-data">
            <input placeholder="Naslov" name="naslov" type="text" autofocus size="48"><br /><br />
            <textarea placeholder="Vsebina" name="besedilo" rows="10" cols="50"></textarea><br />
            <input name="post" type="submit" value="Objavi" >
            </div>
            <div class="col-lg-4"></div>
        </form>
        </div>  
        </div>        
        </div>
        
        </div>
        


 <?php                          
include('includes/footer.php');
?>