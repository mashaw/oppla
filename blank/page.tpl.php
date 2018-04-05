

<div id="page" class="container" >

<?php print render($page['content']); ?>

 <?php if ($sidebar_second): ?>
      <aside class="sidebar">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>
</div>
