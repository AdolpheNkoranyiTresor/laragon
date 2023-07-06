<?php require ('partials/head.php') ?>
<?php include ('partials/nav.php') ?>
<?php include ('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-5"><a href="/notes" class="text-green-600 underline">Back to notes ...</a></p>
        <p><?= $note['body']; ?></p>
    </div>
</main>
    
<?php include ('partials/footer.php') ?>