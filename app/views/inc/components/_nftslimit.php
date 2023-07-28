<h2 class="headline-md section-title text-center" id="discover-label">Explore Items</h2>

<?php //$result = selectLimit("nfts", "nft_id", "8"); 
?>

<ul class="grid-list">
  <?php if ($data['activeLimit'] > 0) : ?>
  <?php foreach ($data['activeLimit'] as $row) : ?>
  <li>
    <div class="discover-card card">

      <div class="card-banner img-holder" style="--width: 500; --height: 500;">
        <img src="<?= URLROOT; ?>/uploads/<?= $row->nft_image; ?>" width="500" height="500" loading="lazy"
          alt="<?= $row->user_image; ?>" class="img-cover">

        <div>
          <a class="bg-theme p-2 position-absolute top-0 end-0 text-white" type="button">
            <?= $row->nft_tag ?>
          </a>
        </div>

        <a class="btn 
                  <?php if (isLoggedin() && $_SESSION['user_id'] == $row->user_id) {
                     echo 'd-none';
                  } ?>" href="<?= URLROOT ?>/nfts?nft_id=<?= $row->nft_id; ?>">
          <ion-icon name="flash" aria-hidden="true"></ion-icon>

          <span class="span">Buy Now</span>
        </a>
      </div>

      <div class="card-profile">
        <?php if (!isset($row->user_image) && $row->user_image == "") : ?>
        <img src="<?= URLROOT; ?>/assets/images/avatar-2.jpg" width="32" height="32" loading="lazy"
          alt="<?= $row->user_image; ?>" class="img">
        <?php else : ?>
        <img src="<?= URLROOT; ?>/uploads/<?= $row->user_image; ?>" width="32" height="32" loading="lazy"
          alt="<?= $row->user_image; ?>" class="img">
        <?php endif; ?>

        <a href="<?= URLROOT ?>/creator?user=<?= $row->user_id ?>" class="link:hover">
          <?= '@' . $row->user_name; ?>
        </a>
      </div>

      <h3 class="title-sm card-title">
        <a href="<?= URLROOT; ?>/nfts?nft_id=<?= $row->nft_id; ?>" class="link:hover">
          <?= $row->nft_name; ?>
        </a>
      </h3>

      <div class="card-meta">

        <div>
          <p>Price</p>
        </div>
        <div>
          <div class="card-price">
            <img src="<?= URLROOT; ?>/assets/images/ethereum.svg" width="16" height="24" loading="lazy"
              alt="ethereum icon">

            <span class="span">
              <?= $row->nft_price; ?> ETH
            </span>
          </div>
        </div>

      </div>

    </div>
  </li>
  <?php endforeach; ?>
  <?php else : ?>
  <p class="text-center fst-italic">Nothing to Display</p>
  <?php endif; ?>
</ul>