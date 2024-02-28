<section class="gallerybl">
  <div class="container">
    <div class="default__container">
      <div class="default__container-left">
        <?php if (get_field('gallerybl_section')) { ?><h2 class="default-title"><?php the_field('gallerybl_section'); ?></h2><?php } ?>
      </div>
      <div class="default__container-right">
        <?php
        $gallerybl_items = get_field('gallerybl_items');
        if ($gallerybl_items): ?>
          <div class="gallerybl__items">
            <?php foreach ($gallerybl_items as $item): ?>
              <a data-fancybox="gallery" href="<?php echo $item['url']; ?>">
                <img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>">
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>