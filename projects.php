<?php include 'header.php'; // Add your header here ?>

<div class="container">
    <h1>My Projects</h1>
    <div class="projects-grid">
        <?php
            $username = "h3its"; // Replace with your GitHub username
            $url = "https://api.github.com/users/$username/repos";
            
            // Initiate cURL session
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "CustomUserAgentString"); // GitHub requires a User-Agent header
            $output = curl_exec($ch);
            
            // Error handling
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            
            // Decode JSON response
            $repos = json_decode($output, true);
            
            // Check if the response includes an array of repos
            if (is_array($repos)) {
                foreach ($repos as $repo) {
                    echo "<div class='project-item'>";
                    echo "<h2><a href='" . $repo['html_url'] . "' target='_blank'>" . $repo['name'] . "</a></h2>";
                    echo "<p>" . $repo['description'] . "</p>";
                    // Use 'language', 'stargazers_count', and other data as needed
                    echo "<p>Language: " . $repo['language'] . "</p>";
                    echo "<p>Stars: " . $repo['stargazers_count'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Failed to load GitHub repos.</p>";
            }
        ?>
    </div>
</div>

<?php include 'footer.php'; // Add your footer here ?>