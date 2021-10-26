<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nav-Bar Resposive</title>

    <!-- Styles -->
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />

    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Nav Bar -->
    <?php
      include 'menu.php';
    ?>
    
    <!-- All the content you want to put -->
    <div class="home_content">
      <div class="text">Home Content</div>
    </div>

    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(".bx-search");

      btn.onclick = function () {
        sidebar.classList.toggle("active");
      };
      searchBtn.onclick = function () {
        sidebar.classList.toggle("active");
      };
    </script>
  </body>
</html>
