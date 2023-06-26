<?php require APPROOT . "/views/inc/head.php"; ?>
<link rel="stylesheet" href="<?= URLROOT; ?>/assets/css/tab.css">

<!-- #HEADER -->
<?php require APPROOT . "/views/inc/header.php"; ?>

<main>
   <article>

      <!-- #USER DISPLAY -->
      <section class="section hero" aria-label="home">
         <div class="container">

            <div class="card col-lg-8 col-md-12 col-12 mx-auto border-0 d-flex flex-column align-items-center p-4">
               <figure class="card-banner position-relative">
                  <?php if (isset($data['resultsLimit']->user_image) && $data['resultsLimit']->user_image != ""): ?>
                  <img src="<?= URLROOT; ?>/uploads/<?= $data['resultsLimit']->user_image ?>" width="100" loading="lazy"
                     class="img-thumbnail rounded-5" alt="Carl Williams profile">
                  <?php else: ?>
                  <img src="./assets/images/profile.jpg" width="100" loading="lazy" class="img-thumbnail rounded-5"
                     alt="Carl Williams profile">
                  <?php endif; ?>

                  <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
                  <a class="btn btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="modal"
                     data-bs-target="#upload-image" style="border-radius: 50%; padding: 1.4rem .7rem;">
                     <i class="fas fa-image fa-xs fa-fw"></i>
                  </a>
                  <?php else: ?>
                  <ion-icon name="checkmark-circle"></ion-icon>
                  <?php endif; ?>
               </figure>

               <div class="card-title-wrapper ms-2">
                  <h3 class="">
                     <a href="#" class="link:hover">
                        <?= $data['resultsLimit']->user_fname ?>
                     </a>
                  </h3>
                  <p class="user-name label-md mb-0">
                     <?= '@' . $data['resultsLimit']->user_name ?>
                  </p>
               </div>

               <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
               <div class="d-flex align-items-center mt-3">
                  <a data-bs-toggle="modal" data-bs-target="#edit-profile" class="btn btn-sm py-2 fw-light"
                     type="button">Edit profile</a>
                  <a class="btn-icon profil-btn ms-2" type="button" data-bs-toggle="modal" data-bs-target="#list-nft">
                     <i class="fas fa-file-upload fa-"></i>
                  </a>
               </div>
               <?php endif; ?>
            </div>

            <!-- Tab links -->
            <div class="d-flex flex-row col-lg-8 mx-auto">
               <button class="tablink" onclick="openPage('sales', this)" id="defaultOpen">On Sale</button>
               <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
               <button class="tablink" onclick="openPage('collection', this)">Collection</button>
               <button class="tablink" onclick="openPage('hidden', this)">Hidden</button>
               <?php endif; ?>
               <button class="tablink" onclick="openPage('about', this)">About</button>
            </div>
         </div>
      </section>
      <!-- USER DISPLAY END -->

      <!-- USER NFTS -->
      <section class="container pb-5 mb-5">
         <div class="discover" aria-labelledby="discover-label">
            <div id="sales" class="tabcontent text-center">
               <?php if (isset($data['active'])): ?>
               <?php if ($data['active'] <= 0): ?>
               <h4 class="text-center ">No NFT Yet</h4>
               <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
               <p class="text-center fst-italic w-50 mx-auto">Create and upload your unique art/NFT to start displaying
                  your great works and assets</p>
               <?php else: ?>
               <p class="text-center fst-italic w-50 mx-auto">Nothig to display</p>
               <?php endif; ?>
               <?php else: ?>
               <?php include APPROOT . '/views/inc/components/_creator-active-nfts.php'; ?>
               <?php endif; ?>
               <?php else: ?>
               <?php #redirect('explore') ?>
               <?php endif; ?>
            </div>

            <div id="collection" class="tabcontent">
               <?php if ($data['results']): ?>
               <?php if ($data['results'] <= 0): ?>
               <h4 class="text-center ">No NFT Yet</h4>
               <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
               <p class="text-center fst-italic w-50 mx-auto">Create and upload your unique art/NFT to start displaying
                  your great works and assets</p>
               <?php else: ?>
               <p class="text-center fst-italic w-50 mx-auto">Nothig to display</p>
               <?php endif; ?>
               <?php else: ?>
               <?php include APPROOT . '/views/inc/components/_creator-all-nfts.php'; ?>
               <?php endif; ?>
               <?php else: ?>
               <?php #redirect('explore') ?>
               <?php endif; ?>
            </div>

            <div id="hidden" class="tabcontent">
               <?php if ($data['inactive']): ?>
               <?php if ($data['inactive'] <= 0): ?>
               <h4 class="text-center ">No NFT Yet</h4>
               <?php if (isLoggedin() && $_SESSION['user_id'] == $data['resultsLimit']->user_id): ?>
               <p class="text-center fst-italic w-50 mx-auto">Create and upload your unique art/NFT to start displaying
                  your great works and assets</p>
               <?php else: ?>
               <p class="text-center fst-italic w-50 mx-auto">Nothig to display</p>
               <?php endif; ?>
               <?php else: ?>
               <?php include APPROOT . '/views/inc/components/_creator-inactive-nfts.php'; ?>
               <?php endif; ?>
               <?php endif; ?>
            </div>

            <div id="about" class="tabcontent text-center text-white">
               <h3 class="mb-5">
                  <?= $data['resultsLimit']->user_fname ?> Bio
               </h3>
               <?php if (isset($data['resultsLimit']->user_bio)): ?>
               <p>
                  <?= $data['resultsLimit']->user_bio ?>
               </p>
               <?php else: ?>
               <p>No Biography yet..</p>
               <?php endif; ?>
            </div>

         </div>

      </section>
      <!-- USER NFTS END -->



      <?php require APPROOT . "/views/inc/components/_newsletter.php" ?>

   </article>

</main>


<!--  #FOOTER -->
<?php require APPROOT . "/views/inc/footer.php" ?>
<script>
$(document).ready(function() {
   $('.edit-nft').on('click', function() {
      $('#update-nft').modal('show');

      $tr = $(this).closest("tr");
      var data = $tr.children("td").map(function() {
         return $(this).text();
      }).get();

      // console.log(data);
      $('#nft_id').val(data[1]);
      $('#nft_name').val(data[2]);
      $('#nft_price').val(data[3]);
      $('#nft_tag').val(data[4]);
      $('#nft_description').val(data[5]);

   });

});
</script>