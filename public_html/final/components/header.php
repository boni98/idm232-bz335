<?php

// if page title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Cheng Du';
$document_title = $page_title . ' | ' . $site_title;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Including TailwindCss Library -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/style.css">
  <title><?php echo $document_title; ?></title>
</head>

<body>
  <!-- Main Content Begins -->

  <?php include 'components/navigation-main.php'; ?>
  <main class="h-full	">