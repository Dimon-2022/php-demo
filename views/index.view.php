<?php

require 'partials/head.php';
require 'partials/nav.php'; 
require 'partials/banner.php';?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>Hello, <?php echo $_SESSION['user']['email'] ?? 'Guest';?></p>
    </div>
  </main>
<?php require 'partials/footer.php';