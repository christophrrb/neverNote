<?php
  include_once "lib/db.php";
  if (isset($_REQUEST['function'])) {
    if ($_REQUEST['function'] == "createnote") {
      create_note($conn);
    }

  } else {
    header("Location: forms/signup.php"); //Redirect to sigup.php if there was no request provided.
  }

  function create_note($conn) {
    $note_title = $_REQUEST['note-title'];
    $note = $_REQUEST['note'];
    $sql = <<<SQL
    INSERT INTO notes (user_id, category_id, note_title, note_content)
    VALUES (1, 1, "$note_title", "$note");
SQL;

  $result = $conn->query($sql);

  if ($result) {
    echo "The record was saved to the database.";
  } else  {
    echo "The record was not saved to the database." . $conn->error;
  }
  }
?>
