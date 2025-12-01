

<?php 
require '../DigitalWave/data/services.php'
?>

<div class="grid md:grid-cols-3 gap-8">

<?php foreach ($services as $service): ?>
    <div class="bg-white p-6 shadow-md rounded-lg">
        <h3 class="text-xl font-bold mb-2">
            <?= $service['title'] ?>
        </h3>
        <p>
            <?= $service['description'] ?>
        </p>
    </div>
<?php endforeach; ?>

</div>