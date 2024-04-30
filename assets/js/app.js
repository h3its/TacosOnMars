document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM content loaded");
  
    const navbarToggle = document.getElementById("nav-burger-button");
    const navbarLinks = document.getElementById("list-nav");
  
    navbarToggle.addEventListener("click", () => {
      navbarLinks.classList.toggle("active");
    });
  });

//MARKDOWN CONVERTER *******************************************************
document.addEventListener("DOMContentLoaded", function(event) {
  // Create a Showdown converter
  var converter = new showdown.Converter();
  // Get the Markdown content
  var markdownContent = document.getElementById('markdown').textContent;
  // Convert the Markdown to HTML
  var htmlContent = converter.makeHtml(markdownContent);
  // Display the HTML content in the div
  document.getElementById('markdown-content').innerHTML = htmlContent;
});
/* ************************************************************************* */
