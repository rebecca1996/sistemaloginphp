<?php
    include('blocos/css-links.php');

    echo '<div class="my-5 py-5 d-flex justify-content-center">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>';

    header("refresh: 2;index.php");
?>

