<?php
include('handler.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- My Style CSS -->
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/img/Group 3.png">
    <title>Librarian</title>
  </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-default navbar-light bg-light shadow-sm fixed-top">
      <a class="navbar-brand brand-name" href="./index.php">
        <img src="./assets/img/Group 3.png" width="30" height="30" class="d-inline-block align-top shadow-sm" alt="">
         Librarian
      </a>
      <a class="btn btn-warning ml-auto btn-sm" href="./notes.php">
        Add Note
      </a>
    </nav>
    <!-- Nav  End-->
    <!-- Card container -->
    <section class="container">
      <div class="card-columns">
      <?php
      include('./handler.php');
      while ($note = mysqli_fetch_assoc($getAllNotesHandler)) {
        $createTime = $note['createdAt'];
        $updateTime = $note['updatedAt'];
      ?>
      <div class="card mt-3" style="<?= htmlspecialchars($note['backgroundColor'])?>" >
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($note["title"]) ?></h5>
          <h6 class="card-subtitle text-secondary"><?= $createTime !== $updateTime ? "Updated at: $updateTime" : "Created at: $createTime" ?></h6>
          <p class="card-text"><?= htmlspecialchars($note["body"]) ?></p>
          <a href="notes.php?id=<?= $note['id']?>" class="btn btn-success btn-sm btn-block" rows="4">Edit</a>
          <a href="delete.php?id=<?= $note['id']?>" class="btn btn-danger btn-sm btn-block" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
        </div>
      </div>
      <?php
      }  
      ?>
      </div>
    </section>
    <!-- Card container End -->
    <!-- Footer -->
    <section class="container-liquid text-center bg-light mt-3 shadow-lg">
      <h2 class="col-12">Contact Me</h2>
      <div class="mt-3">        
        <h4>Phone</h4>
        <a href="tel:+628998740995" class="btn btn-outline-success btn-sm">+62899 8740 995</a>
      </div>
      <div class="mt-3">
        <h4>Mail</h4>
        <a href="mailto:krisna.s.362@gmail.com" class="btn btn-outline-success btn-sm">krisna.s.362@gmail.com</a>
      </div>
      <div class="mt-3">
        <h2>Catch me on social media</h2>
        <div>
          <a href="https://web.facebook.com/ichungelo/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-facebook.png" alt="facebook-icon"></a>
          <a href="https://twitter.com/ichungelo" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-twitter.png" alt="twitter-icon"></a>
          <a href="https://www.instagram.com/ichungelo/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-instagram.png" alt="instagram-icon"></a>
          <a href="https://www.linkedin.com/in/krisna-satriadi-544aa9111/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-linkedin.png" alt="linkedin-icon"></a>
          <a href="https://github.com/ichungelo" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-github.png" alt="github-icon"></a>
          <a href="https://api.whatsapp.com/send?phone=628998740995&text=Hi" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-whatsapp.png" alt="wa-icon"></a>
        </div>
      </div>
      <div class="mt-3" style="background-color: #238011; color: white">
        Copyright &#169 Ichungelo inc 2021, All rights reserved
      </div>
    </section>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>