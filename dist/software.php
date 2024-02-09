<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <title>Regal Analytics</title>
</head>
<body>

  <!-- Header -->
  <?php $page_category = 'software'; ?>
  <?php require_once 'includes/header.php'; ?>

  <!-- Section A: Content Description -->
  <section id="home-a">
    <div class="container">
      <h2>Our Content</h2>
      <div class="text-group">
        <p>Are you a student in mathematics, statistics, or economics? We have detailed explanations for the concepts you are learning!</p>
        <p>Are you a working professional trying to expand your analytical skillset? We have practical examples that will be useful to you needs!</p>
        <p>Do you love learning and want to find something interesting? You're in the right place to discover something new!</p>
      </div>
      <div class="icon-box">
        <div>
          <i class="fas fa-user fa-3x"></i>
          <p>For students</p>
        </div>
        <div>
          <i class="fas fa-user-tie fa-3x"></i>
          <p>professionals</p>
        </div>
        <div>
          <i class="fas fa-user-astronaut fa-3x"></i>
          <p>and everyone else!</p> 
        </div>
      </div>
    </div>
      
  </section>

  <!-- <i class="fas fa-laptop fa-2x"></i> -->
  <!-- <i class="fas fa-chart-bar fa-2x"></i> -->
  <!-- <i class="fas fa-graduation-cap fa-2x"></i> -->
  
  <section id="home-b">
    <div class="container">
      <h2>More Resources</h2>
      <div class="content">
        <p>Can't find what you're looking for?</p>
        <p>Check out these other resources below:</p>
      </div>
      <div class="grid-link">
        <a href="https://www.google.com/" target="_blank">Google</a>
        <a href="https://www.youtube.com/">Youtube</a>
        <a href="https://en.wikipedia.org/wiki/Main_Page">Wikipedia</a>
      </div>
    </div>
  </section>


  <?php require_once 'includes/footer.php'; ?>

</body>

</html>