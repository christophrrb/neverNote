<?php
$page_title= "Dashboard";
include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-nav.php";
?>

<form class="form-group" action="index.html" method="post">
  <input type="text" name="search" value="search" placeholder="Search" class="form-control">
  <input type="submit" class="btn btn-outline-primary">
</form>

<?php
$sql = <<<SQL
  SELECT note_title, note_content FROM notes WHERE user_id=1
SQL;

$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
  foreach($row as $key => $var) {
    $$key = $var;
  }
  echo "$note_title <br> $note_content";
}
?>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/noteapp/tpl/app-footer.php";?>
