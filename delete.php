<?php
include('config.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $checkNoteByIdQuery = "SELECT * FROM notes WHERE id = '$id'";
  $checkNoteByIdHandler = mysqli_query($connection, $checkNoteByIdQuery) or die(mysqli_error($connection));
  if (mysqli_num_rows($checkNoteByIdHandler) > 0) {
    $deleteNoteByIdQuery = "DELETE FROM notes WHERE id ='$id'";
    $deleteNoteByIdHandler = mysqli_query($connection, $deleteNoteByIdQuery) or die(mysqli_error($connection));
    if ($deleteNoteByIdHandler) {
      echo "
      <script>
        alert('Note Successfully Deleted')
        window.location.href = 'index.php';
      </script>";
    } else {
      echo "
      <script>
        alert('Failed to Delete Note')
      </script>";
    }
  }
}
?>