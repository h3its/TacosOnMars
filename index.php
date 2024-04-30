<?php include 'header.php' ?>

        <div class="container-fluid" id="banner"
        style="background-image: url('assets/Morning(banner).png');">
        <hgroup class="container">
            <blockquote style="font-size: 2rem; margin: 0;">
              "Keep your eyes on the stars, and your feet on the ground."
              <footer>
                <cite>- Teddy Roosevelt</cite>
              </footer>
            </blockquote>
          </hgroup>
        </div>

    <main class="container">
      
      <section class="container">
        <div class="grid">
          <img src="assets/Small-rocket-launch.PNG">
          <div>
            <h2><strong>Ab Initio</strong></h2>
            <p>Good morning! This website was created for use by a college computer science student to 
              practice web development, as well as teach and document progress along the way. This website 
              will continue to grow and develop as I learn. Per Audacia ad Astra!</p>
              <h2><strong>Quid Intus</strong></h2>
              <p>Throughout Tacos on Mars you will find Programming Tutorials simple enough for anyone to 
                follow (and me to write), food recipes that are as exquisito as they are easy to make. In 
                the blog section you will find discussions written by multiple authors on various subjects 
                you may find interesting.</p>
          </div>
        </div>
      </section>

      <section class="latest-posts">
  <h2>Latest Posts</h2>
  <ul>
    <?php
      try {
        $sql = "SELECT Post_Id, Title, Date FROM Posts ORDER BY Date DESC LIMIT 5";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        foreach($stmt->fetchAll() as $post) {
          // Note the added 'post-item' class for li and the div wrappers 'post-title' and 'post-date'
          echo "<li class='post-item'>";
          echo "<div class='post-title'><a href='post.php?Id=" . $post['Post_Id'] . "'>" . htmlspecialchars($post['Title']) . "</a></div>";
          echo "<div class='post-date'>" . date('F jS Y', strtotime($post['Date'])) . "</div>";
          echo "</li>";
        }

        $stmt = null;

      } catch(Exception $e) {
        echo "Error";
        echo $e->getMessage();
      }
    ?>
  </ul>
</section>



      
      <section class="grid">

        <div class="container">
          <img src="assets/Small-rocket-launch.PNG">
          <h2>Blog</h2>
          <button>Visit</button>
        </div>

        <div class="container">
          <img src="assets/Small-rocket-launch.PNG">
          <h2>Recipes</h2>
          <button>Visit</button>
        </div>

        <div class="container">
          <img src="assets/Small-rocket-launch.PNG">
          <h2>Code</h2>
          <button>Visit</button>
        </div>
      </section>

    </main>

    <?php include 'footer.php' ?>
