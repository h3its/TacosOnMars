<style>
    

    .cardAnchor {
        all: unset;
        text-decoration: none;
        transition: all .15s ease-in-out;
        text-align: center;
    }

    .cardAnchor:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .browseCard {
        margin: 10px; 
        padding: 0; 
        border-radius: 10px;
    }

    .browseCard:hover {
        background-color: #192127;
    }

    .cardImage {
        padding: 10px;
        border-radius: 10px; /* Maintain the border-radius as per your design */
        width: 100%; /* Set a specific width or use 100% to fill the container */
        height: 15rem; /* Set a fixed height */
        object-fit: cover; /* This will cover the area, potentially cropping the image */
    }


    .cardTitle {
        margin: 0;
        color: white;
        font-size: 1.5rem;
    }

    .cardDesc {
        color: grey;
        
    }

    .cardDate {
        color: grey;
    }
</style>    

<?php

function card($id, $title, $desc, $image, $date) {
    echo "<a class='cardAnchor' href='post.php?Id=" . $id . "'>";
    echo "<article class='browseCard'>";
    echo "<img class='cardImage' src='" . $image . "' style='border-radius: 10px;'>";
    echo "<p class='cardTitle'>" . $title . "</p>" ;
    echo "<p class='cardDesc'>" . $desc . "</p>";
    echo "<p class='cardDate'>" . $date . "</p>";
    echo "</article></a>";
    echo "";
    echo "";
}

?>