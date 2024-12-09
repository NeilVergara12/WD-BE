<?php
include("connect.php");
include("navbar.php");
include("style.php");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Neil's Corememories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
  <!-- Header -->
  <header class="container-fluid position-relative" style="max-width:100%;" id="home">
    <img class="img-fluid" src="../img/header.png" alt="header" style="width:100%; height: auto;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
      <h1 class="text-white display-1">
        <span class="bg-dark px-3 py-2 opacity-75"><b>Neil's</b></span>
        <span class="d-none d-sm-inline text-light">Corememories</span>
      </h1>
    </div>
  </header>

  <!-- Page content -->
  <div class="container my-5" style="max-width:1564px;">

    <!-- About Section -->
    <div id="about" class="py-5">
      <h3 class="border-bottom border-light pb-3">About</h3>
      <p>Hello guys I'm Neil Jeferson Vergara and this website will show some of my corememories through the years. I
        have 4 islands: the First one is Family Island, the Second one is Friendship Island, the Third is Love Island,
        and the Fourth one is Adventure Island. These islands are precious to me because they contain everyone close
        to me.</p>
    </div>

    <!-- Island and content -->
    <?php
    $query = "SELECT * FROM islandsofpersonality WHERE status = 'active'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($island = mysqli_fetch_assoc($result)) {
        echo '
        <div id="' . strtolower(str_replace(' ', '', $island['name'])) . '" class="py-5">
            <h3 class="border-bottom border-light pb-3">' . $island['name'] . '</h3>
            <p>' . $island['shortDescription'] . '</p>
            <div class="text-center">
                <img src="' . $island['image'] . '" alt="' . $island['name'] . '" class="img-fluid" style="width:500px;">
            </div>
        </div>
        <div class="text-center">
            <p>' . $island['longDescription'] . '</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">';

        $contentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = " . $island['islandOfPersonalityID'];
        $contentResult = mysqli_query($conn, $contentQuery);

        if (mysqli_num_rows($contentResult) > 0) {
          while ($content = mysqli_fetch_assoc($contentResult)) {
            echo '
                <div class="col">
                    <div class="card">
                        <img src="' . $content['image'] . '" alt="' . $content['content'] . '" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">' . $content['content'] . '</h5>
                        </div>
                    </div>
                </div>';
          }
        }
        echo '</div>';
      }
    }
    ?>
  </div>

  <?php
  $conn->close();
  ?>

  <!-- Footer -->
  <footer class="text-center bg-dark text-white py-3">
    <p>Corememories through the years</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>