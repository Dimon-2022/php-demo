<?php

require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form  method="POST" action="/notes">
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">            
              <div class="col-span-full">
                <label for="body" class="block text-sm/6 font-medium text-gray-900">Fill out note</label>
                <div class="mt-2">
                  <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                  <?php if (isset($errors['body'])) { ?>
                    <span class="text-red-500"><?php echo $errors['body']; ?></span>
                   <?php }?>
                </div>
              </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Note</button>
        </div>
      </form>

    </div>
  </main>
<?php require base_path('views/partials/footer.php');
