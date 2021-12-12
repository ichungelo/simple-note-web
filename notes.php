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
    </nav>
    <!-- Nav End -->
    <!-- Form -->
    <section class="container">
      <div class="card">
        <div class="card-body">
          <form class="was-validated" method="POST">
            <h1><?= isset($id) === true ? "Edit" : "Add" ?> Notes</h1> 
            <div class="form-row">
            <div class="behind-nav form-group col-lg-10">
              <label>Title</label>
              <input type="text" class="form-control form-control-sm" name="title" placeholder="Insert Title" value="<?= isset($id) === true ? $editNote['title'] : '' ?>" required>
            </div>
            <div class="behind-nav form-group col-lg-2">
              <label>Note Color</label>
              <?php
              $background = isset($id) === true ? $editNote['backgroundColor'] : ""
              ?>
              <select class="form-control form-control-sm" id="inlineFormCustomSelect" name="backgroundColor" require>
                <option value="background-color: #FFFFFF" style="background-color: #FFFFFF;" <?= $background === "background-color: #FFFFFF" ? "selected" : "" ?>>White</option>
                <option value="background-color: #EF93FF" style="background-color: #EF93FF;" <?= $background === "background-color: #EF93FF" ? "selected" : "" ?>>Purple</option>
                <option value="background-color: #FBA39D" style="background-color: #FBA39D;" <?= $background === "background-color: #FBA39D" ? "selected" : "" ?>>Red</option>
                <option value="background-color: #66CFFF" style="background-color: #66CFFF;" <?= $background === "background-color: #66CFFF" ? "selected" : "" ?>>Blue</option>
                <option value="background-color: #FFE893" style="background-color: #FFE893;" <?= $background === "background-color: #FFE893" ? "selected" : "" ?>>Yellow</option>
              </select>
            </div>
            <div class="behind-nav form-group col-12">
              <label>Body</label>
              <textarea class="form-control" name="body" rows="5" required><?= isset($id) === true ? $editNote['body'] : '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-warning ml-auto btn-block" name="<?= isset($id) === true ? "edit" : "add" ?>"><?= isset($id) === true ? "Edit" : "Add" ?></button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="text-center bg-light row">
      <h2 class="col-12">Contact Me</h2>
      <div class="col-12 mt-3">        
        <h4>Phone</h4>
        <a href="tel:+628998740995" class="btn btn-outline-success btn-sm">+62899 8740 995</a>
      </div>
      <div class="col-12 mt-3">
        <h4>Mail</h4>
        <a href="mailto:krisna.s.362@gmail.com" class="btn btn-outline-success btn-sm">krisna.s.362@gmail.com</a>
      </div>
      <div class="col-12">
        <h2>Catch me on social media</h2>
        <div class="about-content">
          <a href="https://web.facebook.com/ichungelo/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-facebook.png" alt="facebook-icon"></a>
          <a href="https://twitter.com/ichungelo" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-twitter.png" alt="twitter-icon"></a>
          <a href="https://www.instagram.com/ichungelo/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-instagram.png" alt="instagram-icon"></a>
          <a href="https://www.linkedin.com/in/krisna-satriadi-544aa9111/" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-linkedin.png" alt="linkedin-icon"></a>
          <a href="https://github.com/ichungelo" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-github.png" alt="github-icon"></a>
          <a href="https://api.whatsapp.com/send?phone=628998740995&text=Hi" target="_blank"><img class="about-social-icon" src="/assets/img/tabler-icon-brand-whatsapp.png" alt="wa-icon"></a>
        </div>
      </div>
      <div class="col-12" style="background-color: #238011; margin: 12px 0 0 0; color: white">
        Copyright &#169 Ichungelo inc 2021, All rights reserved
      </div>
    </footer>
    <!-- Form End -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>