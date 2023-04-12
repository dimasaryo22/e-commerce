<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>

  <!-------------------- header section start  ---------------->
    <?php  include '_partial/header.php' ?>
    <!-------------------- header section end  ---------------->

    

    <!--------- category section start----- -->
    <section class="category">
      <h1>Shop By Category</h1>
      <div class="row">
        <div class="left">
          <img src="images/kursi1.jfif" alt="" />
          <div class="category-caption">
            <p>kursi's</p>
            <a href="#" class="category-btn">Malskar kursi</a>
            <span class="category-collection">New Collection</span>
          </div>
        </div>
        <div class="center">
          <img src="images/kursi2.jfif" alt="" />
          <div class="category-caption">
            <span class="category-collection">Kursi</span>
            <h2>W</h2>
            <p>New Cloth</p>
          </div>
        </div>
        <div class="right">
          <img src="images/kursi3.jfif" alt="" />
          <div class="category-caption">
            <p>Man's</p>
            <a href="#" class="category-btn">Adde Kursi</a>
            <span class="category-collection">New Collection</span>
          </div>
        </div>
      </div>
    </section>
    <!--------- category section end------->
    

    <!-- /*-------------------- Image Gallery section end----------------- */ -->

<!---------------- footer section start -------------- -->
<?php include '_partial/footer.php' ?>
<!---------------- footer section end -------------- -->

    <script>
      window.onscroll = function () {
        myFunction();
      };

      // Get the navbar
      var navbar = document.getElementById("header");

      // Get the offset position of the navbar
      var sticky = navbar.offsetTop;

      // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
          navbar.style.boxShadow = "0 8px 6px -6px black";
        } else {
          navbar.classList.remove("sticky");
          navbar.style.boxShadow = "none";
        }
      }

      //   function DropDown() {
      //     document.getElementById("myDropdown").classList.toggle("show");
      //   }
    </script>
  </body>
</html>
