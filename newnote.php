<?php
$page_title= "New note";
include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <form action="../index.php?function=createnote" method="post">
      <div class="card">
        <div class="form-group">
          <div class="card-header"><input class="form-control" type="text" placeholder="Note Title" name="note-title"></div>
          <div class="card-body">
            <label for="note">Note</label>
            <input type="text" class="form-control" id="note" name="note">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category">
            <input type="submit" class="btn btn-primary">
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- jQuery first, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>

</html>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-footer.php"; ?>
