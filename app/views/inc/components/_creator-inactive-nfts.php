<ul class="grid-list">
   <?php foreach ($data['inactive'] as $row): ?>
   <li>
      <div class="discover-card card">
         <div class="card-banner img-holder" style="--width: 500; --height: 500;">
            <img src="<?= URLROOT; ?>/uploads/<?= $row->nft_image ?>" width="500" height="500" loading="lazy"
               alt="<?= $row->user_image ?>" class="img-cover">

            <div class="d-flex align-items-center justify-content-between">

               <?php include APPROOT. '/views/inc/components/_nft-actions.php'; ?>

               <a class="bg-theme p-2 position-absolute top-0 end-0 text-white" type="button">
                  <?= $row->nft_tag ?>
               </a>
            </div>

            <div>
               <?php $_SESSION['nft_id'] = $row->nft_id ?>
               <a href="<?= URLROOT ?>/nfts?nft_id=<?= $row->nft_id ?>" class="btn 
                                 <?php if (isLoggedin() && $_SESSION['user_id'] == $row->user_id) {
                                    echo 'd-none';
                                 } ?>">
                  <ion-icon name="flash" aria-hidden="true"></ion-icon>
                  <span class="span">Buy Now</span>
               </a>
            </div>
         </div>

         <div class="card-profile">
            <?php if (!isset($row->user_image) && $row->user_image == ""): ?>
            <img src="<?= URLROOT; ?>/assets/images/avatar-2.jpg" width="32" height="32" loading="lazy" alt="<?= $row->user_image; ?>"
               class="img">
            <?php else: ?>
            <img src="<?= URLROOT; ?>/uploads/<?= $row->user_image; ?>" width="32" height="32" loading="lazy"
               alt="<?= $row->user_image; ?>" class="img">
            <?php endif; ?>

            <a href="#" class="link:hover">
               <?= '@' . $row->user_name; ?>
            </a>
         </div>

         <h3 class="title-sm card-title text-start">
            <a href="<?= URLROOT; ?>/nfts?nft_id=<?= $row->nft_id; ?>" class="link:hover">
               <?= $row->nft_name; ?>
            </a>
         </h3>
         <div class="card-meta">
            <div>
               <p class="mb-0">Price</p>
            </div>
            <div>
               <div class="card-price">
                  <img src="<?= URLROOT; ?>/assets/images/ethereum.svg" width="16" height="24" loading="lazy" alt="ethereum icon">

                  <span class="span">
                     <?= $row->nft_price; ?> ETH
                  </span>
               </div>
            </div>
         </div>

      </div>
   </li>
   <?php endforeach; ?>
</ul>