<?php
include 'dbconn.php';
session_start();

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $postedDate = date("F d, Y");
  $authorId = $_SESSION['user_id'];
  $author = getAuthorName($authorId, $conn);

  $description = $_POST['description'];
  $ingredients = $_POST['ingredients'];
  $instruction = $_POST['instruction'];

  $image = $_FILES['image'];
  $imagePath = '_Pictures/' . $image['name'];

  move_uploaded_file($image['tmp_name'], $imagePath);

  $tags = getAllTags();
  $formattedIngredients = compactInfoToList($ingredients, 'bullet');
  $formattedInstruction = compactInfoToList($instruction, 'number');
  onInsertInDatabase($title, $postedDate, $author, $description, $formattedIngredients, $formattedInstruction, $tags, $imagePath, $conn);
}

function getAuthorName($authorId, $conn) {
  $sql = "SELECT Username FROM account_details WHERE id = '$authorId'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) == 1) {
    $authorData = mysqli_fetch_assoc($result);
    return $authorData['Username'];
  } else {
    return "Unknown";
  }
}

function getAllTags()
{
  $tags = [];

  if (isset($_POST['tag'])) {
    $selectedTags = $_POST['tag'];
    foreach ($selectedTags as $tag) {
      $tags[] = $tag;
    }
  }

  return implode(", ", $tags);
}

function compactInfoToList($info, $listType = 'bullet')
{
  $lines = explode("\n", $info);
  $formattedText = '';

  if (!empty($info)) {
    if ($listType === 'bullet') {
      $formattedText .= '<ul>';
      foreach ($lines as $line) {
        $trimmedLine = trim($line);
        if (!empty($trimmedLine)) {
          $formattedText .= '<li>' . $trimmedLine . '</li>';
        }
      }
      $formattedText .= '</ul>';
    } else if ($listType === 'number') {
      $formattedText .= '<ol>';
      foreach ($lines as $line) {
        $trimmedLine = trim($line);
        if (!empty($trimmedLine)) {
          $formattedText .= '<li>' . $trimmedLine . '</li>';
        }
      }
      $formattedText .= '</ol>';
    }
  }

  return $formattedText;
}

function onInsertInDatabase($title, $postedDate, $author, $description, $ingredients, $instruction, $tags, $imagePath, $conn)
{
  $insert = "INSERT INTO recipes (title, author, `posted-date`, description, ingredients, instruction, tags, `image-path`) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = mysqli_prepare($conn, $insert);
  mysqli_stmt_bind_param($stmt, "ssssssss", $title, $author, $postedDate, $description, $ingredients, $instruction, $tags, $imagePath);

  if (mysqli_stmt_execute($stmt)) {
    $insertedId = mysqli_insert_id($conn);
    mysqli_stmt_close($stmt);
    header("Location: recipe-information.php?id=" . $insertedId);
    exit();
  } else {
    mysqli_stmt_close($stmt);
    echo "Failed to insert data: " . mysqli_stmt_error($stmt);
  }
}
