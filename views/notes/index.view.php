<?php

require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <ul>
      <?php
      foreach ($notes as $note) { ?>
        <li>
          <a class="text-blue-500 hover:underline" href="http://demo.loc/note?id=<?php echo $note['id']; ?>">
            <?php echo htmlspecialchars($note['body']); ?>
          </a>
        </li>
      <?php }?>
      </ul>
      <p class="mt-6">
        <a href="/notes/create" class="text-green-500 hover:underline">Create Note</a>
      </p>
    </div>
  </main>
<?php require 'views/partials/footer.php';
