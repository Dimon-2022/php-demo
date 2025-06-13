<?php

require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';
?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href="/notes" class="text-blue-500 hover:underline">Back to Notes</a>  
    <p><?php echo $note['body']; ?></p>
    </div>
  </main>
<?php require 'partials/footer.php';
