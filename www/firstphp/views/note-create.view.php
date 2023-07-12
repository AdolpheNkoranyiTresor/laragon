<?php require ('partials/head.php') ?>
<?php include ('partials/nav.php') ?>
<?php include ('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 md:grid-cols-3 mt-5">
        
        <form method="POST">
            <div class="space-y-3 shadow sm:overflow-hidden sm:rounded-md p-5">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <textarea name="body" id="body" rows="3" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Here is an idea for note ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <div class="mt-1">
                            <div class="bg-gray-30 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 text-white p-1">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
</main>
    
<?php include ('partials/footer.php') ?>