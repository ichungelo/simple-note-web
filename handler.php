<?php
include("config.php");
// GET ALL NOTES
$getAllNotesQuery = "SELECT * FROM notes ORDER BY updatedAt DESC";
$getAllNotesHandler = mysqli_query($connection, $getAllNotesQuery) or die(mysqli_error($connection));

// GET NOTE BY ID
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $getNoteByIdQuery = "SELECT * FROM notes WHERE id = '$id'";
  $getNoteByIdHandler = mysqli_query($connection, $getNoteByIdQuery) or die(mysqli_error($connection));
  $editNote = mysqli_fetch_assoc($getNoteByIdHandler);
}

// POST NOTE
if (isset($_POST['add'])) {
  $title = $_POST['title'];
  $body = $_POST['body'];
  $backgroundColor = $_POST['backgroundColor'];
  date_default_timezone_set('Asia/Jakarta');
  $createdAt = date("Y-m-d H:i:sa");
  $updatedAt = $createdAt;
  $postNoteQuery = "INSERT INTO notes (title, body, backgroundColor, createdAt, updatedAt) VALUES ('$title', '$body', '$backgroundColor', '$createdAt', '$updatedAt')";

  $postNoteHandler = mysqli_query($connection, $postNoteQuery) or die(mysqli_error($connection));
  if ($postNoteHandler) {
    echo "
    <script>
      alert('Note Successfully Added')
      window.location.href = 'index.php';
    </script>";
  } else {
    echo "
    <script>
      alert('Failed to Add Note')
    </script>";
  }
}

//EDIT NOTE
if (isset($_POST['edit'])) {
  $id = $_GET['id'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $backgroundColor = $_POST['backgroundColor'];
  date_default_timezone_set('Asia/Jakarta');
  $updatedAt = date("Y-m-d H:i:sa");

  $editNoteQuery = 
  "UPDATE
    notes
    SET
      title = '$title',
      body = '$body',
      backgroundColor = '$backgroundColor',
      updatedAt = '$updatedAt'
    WHERE
      id = '$id'";

  $editNoteHandler = mysqli_query($connection, $editNoteQuery) or die(mysqli_error($connection));
  if ($editNoteHandler) {
    echo "
    <script>
      alert('Note Successfully Editted')
      window.location.href = 'index.php';
    </script>";
  } else {
    echo "
    <script>
      alert('Failed to Edit Note')
    </script>";
  }
}
?>