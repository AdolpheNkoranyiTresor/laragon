<?php require ('partials/head.php') ?>
<?php include ('partials/nav.php') ?>
<?php include ('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="">
            <label for="body">Description</label>
            <div>
                <textarea name="body" id="body" cols="50" rows="5"></textarea>
                <p>
                    <button type="Submit" class="text-green-700 mt-2 border-2 bg-white">Create</button>
                </p>
            </div>
        </form>
    </div>
</main>
    
<?php include ('partials/footer.php') ?>