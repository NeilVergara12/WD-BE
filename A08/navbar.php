<!-- icon -->
<link rel="icon" href="../icon/sunny-hat.png">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#home"><b>Corememories</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#home">Home |</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About |</a></li>
          <?php
          $query = "SELECT * FROM islandsofpersonality WHERE status = 'active'";
          $result = $conn->query($query);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<li class="nav-item"><a class="nav-link" href="#' . strtolower(str_replace(' ', '', $row['name'])) . '">' . $row['name'] . '  | </a></li>';
              }
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
