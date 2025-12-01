



<?php 
$name = $email = $message = '';

$errors = [];
$success = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['emal'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if(empty($name)){
        $errors['name'] = 'enter votre nom';
    }
    if(empty($email)){
        $errors['email'] = 'enter votre email';
    }
    if(empty($message)){
        $errors['message'] = 'enter votre message';
    }
    if(empty($errors)){
        $success = 'merci pour votre message';
        $name = $message = $email = '';
    }
}

?>




<h1 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h1>

<?php if ($success): ?>
    <div class="bg-green-200 text-green-800 p-4 mb-6 rounded">
        <?= $success ?>
    </div>
<?php endif; ?>

<form method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
    <div>
        <input type="text" name="name" placeholder="Votre nom"
               value="<?= $name ?>"
               class="w-full border px-4 py-2 rounded-lg">
        <small class="text-red-600"><?= $errors['name'] ?? '' ?></small>
    </div>
    <div>
        <input type="email" name="email" placeholder="Votre email"
               value="<?= $email ?>"
               class="w-full border px-4 py-2 rounded-lg">
        <small class="text-red-600"><?= $errors['email'] ?? '' ?></small>
    </div>
    <div>
        <textarea name="message" placeholder="Votre message"
                  class="w-full border px-4 py-2 rounded-lg"><?= $message ?></textarea>
        <small class="text-red-600"><?= $errors['message'] ?? '' ?></small>
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
</form>