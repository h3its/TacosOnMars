<?php 
  include 'header.php';
  include 'assets/components/card.php';
?>

<?php 
  $type = $_GET['browse'];

  try {
    $sql = "SELECT Post_Id, Title, Description, Date FROM Posts WHERE Type=:type";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':type', $type);
    $stmt->execute();

    

?>

    <main class="container">
      <div class="grid">
        <h1><?= $type ?></h1>
      </div>
        
        <style>
            @media (min-width: 768px) {
              .grid {
                  grid-template-columns: repeat(3, 1fr);
              }
            }
        </style>
        <div class="grid">
  <?php 
    foreach($stmt->fetchAll() as $post){    
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
        card($post['Post_Id'], $post['Title'], $post['Description'], "assets/Small-rocket-launch.PNG", date('F jS Y', strtotime($post['Date'])));
    }
    $stmt = null;

    }catch(Exception $e){
      echo "Error";
      echo $e->getMessage();
    }        
  ?>
        </div>
    </main>
<?php include 'footer.php' ?>

