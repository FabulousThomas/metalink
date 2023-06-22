<?php require "inc/head.php"; ?>

<style>
   small {
      font-size: 1.5rem;
   }

   small.spans {
      font-size: 1.2rem;
   }
</style>

<!-- #HEADER -->
<?php require APPROOT . "/views/inc/header.php"; ?>

<main>
   <article>
      <!-- #HERO -->
      <section class="section hero" aria-label="home">
         <div class="container">

            <?php foreach ($data['nfts'] as $row): ?>
            <div class="card col-lg-8 col-md-12 col-12 mx-auto border-0 d-flex flex-column align-items-center p-4">

                  <?php $_SESSION['nft_id'] = $row->nft_id; ?>

                  <h1 class="hero-title fw-bold">
                     <span class="span">
                        <?= $row->nft_name ?>
                  </span>
               </h1>

               <figure class="card-banner position-relative mt-5">
                  <img src="<?= URLROOT; ?>/uploads/<?= $row->nft_image ?>" width="150" loading="lazy"
                        class="img-thumbnail rounded-5" alt="Carl Williams profile">
                  </figure>

                  <div class="row align-items-center justify-content-evenly w-100 mt-3">
                     <div class="col-md-6 mb-4">
                        <p>Current Bid</p>
                        <div class="d-flex align-items-center justify-content-center">
                           <img src="<?= URLROOT ?>/assets/images/ethereum.svg" width="22" height="100" loading="lazy"
                              alt="ethereum icon" class="d-inline me-2">
                           <h2 class="mb-0">
                              <?= $row->nft_price ?> ETH
                           </h2>
                        </div>
                     </div>

                     <div class="col-md-6 mb-5">
                        <?php if (isLoggedin() && $_SESSION['user_id'] == $row->user_id): ?>
                     <a href="<?= URLROOT ?>/explore" class="btn rounded-3">You own this Item</a>
                        <?php else: ?>
                           <?php if (isLoggedin()): ?>
                     <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" class="form-control shadow-none"
                           value="<?= $nfts_user_id ?>">
                                 <input type="hidden" name="nft_id" class="form-control shadow-none" value="<?= $nfts_id ?>">
                                 <input type="hidden" name="user_name" class="form-control shadow-none"
                                    value="<?= $nfts_user_name ?>">
                                 <input type="hidden" name="user_fname" class="form-control shadow-none"
                                    value="<?= $nfts_user_fname ?>">
                                 <input type="hidden" name="nft_image" class="form-control shadow-none"
                                    value="<?= $nfts_image ?>">
                                 <input type="hidden" name="nft_price" class="form-control shadow-none"
                                    value="<?= $nfts_price ?>">

                                 <!-- <a href="<?= URLROOT ?>/buy-nft.php?nft_id=<?= $nfts_id ?>" name="btn-buy-now"
                                 class="btn rounded-2">Buy Now</a> -->

                                 <a type="button" data-bs-target="#buy-nft" data-bs-toggle="modal" class="btn rounded-2">Buy
                                    Now</a>
                              </form>
                           <?php else: ?>
                     <a type="button" data-bs-toggle="modal" data-bs-target="#login-form" class="btn rounded-2">Login To
                        Purchase</a>
                           <?php endif; ?>
                        <?php endif; ?>
                  </div>

               </div>

               <div class="card-title-wrapper ms-2">
                  <h3 class="border-bottom pt-4 pb-3">Details</h3>
                  <p class="py-3">
                        <?= $row->nft_description ?>
                  </p>

                  <li>
                     <div class="seller-card card px-2 py-2">

                        <div class="d-flex align-items-center justify-content-between">
                           <figure class="card-banner mt-2 position-relative">
                                 <?php if (isset($row->user_image)): ?>
                              <img src="<?= URLROOT; ?>/uploads/<?= $row->user_image; ?>" width="64" height="64"
                                       loading="lazy" alt="<?= $row->user_image; ?> profile">
                                 <?php else: ?>
                              <img src="<?= URLROOT ?>/assets/images/profile.jpg" width="64" height="64" loading="lazy"
                                       alt="<?= $row->user_image; ?> profile">
                                 <?php endif; ?>

                                 <ion-icon name="checkmark-circle"></ion-icon>
                              </figure>

                              <div class="card-title-wrapper ms-2">
                                 <h3 class="title-sm">
                                    <a href="<?= URLROOT; ?>/creator?user=<?= $row->user_id; ?>" class="link:hover">
                                       <?= $row->user_fname; ?>
                                 </a>
                              </h3>

                              <p class="user-name label-md text-start">
                                    <?= '@' . $row->user_name; ?>
                              </p>
                           </div>
                        </div>

                     </div>
                  </li>
               </div>
            </div>

            <?php endforeach; ?>

         </div>
      </section>

   </article>
</main>


<!--  #FOOTER -->
<?php require APPROOT . "/views/inc/footer.php" ?>