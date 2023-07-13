<?php require ('views/partials/head.php') ?>
<?php include ('views/partials/nav.php') ?>
<?php include ('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-5"><a href="/notes" class="text-green-600 underline">Back to notes ...</a></p>
        <p><?= $note['body']; ?></p>
    </div>
</main>
    
<?php include ('views/partials/footer.php') ?>