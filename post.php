<?php include 'header.php' ?>
<?php
    try {
      $sql = "SELECT * FROM Posts WHERE Post_Id = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(":id", $_GET['Id']);
      $stmt->execute();

      $post = $stmt->fetch();

      $stmt = null;

    }catch(Exception $e){
      echo "Error";
      echo $e->getMessage();
    }
?>
  <div class="container">
    <div>
              <hgroup>
                  <h1><?= $post['Title'] ?></h1>
                  <p><?= $post['Description'] ?></p>
                  <p><?php echo date('F jS Y', strtotime($post['Date'])); ?></p>
                  <figure class="centered"><img src="assets/Morning(banner).png"></figure>
              </hgroup>
              
              <script id="markdown" type="text/markdown">
                <?= $post['Body'] ?>
              </script>

            <div id="markdown-content">
              
            </div>
    </div>
  </div>
<?php include 'footer.php' ?>