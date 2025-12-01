


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'DigitalWave' ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="index.php?page=home" class="<?= ($page=='home')?'text-blue-600 font-medium':'' ?>">Accueil</a></li>
        <li><a href="index.php?page=services" class="<?= ($page=='services')?'text-blue-600 font-medium':'' ?>">Services</a></li>
        <li><a href="index.php?page=about" class="<?= ($page=='about')?'text-blue-600 font-medium':'' ?>">À propos</a></li>
        <li><a href="index.php?page=contact" class="<?= ($page=='contact')?'text-blue-600 font-medium':'' ?>">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main class="container mx-auto py-8">
