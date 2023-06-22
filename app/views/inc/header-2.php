<header>
   <h3>
      <label for="nav-toggle">
         <span class="las la-bars"></span>
      </label> <span class="name">Dashboard</span>
   </h3>
   <!-- <div class="search-wrapper">
            <span class="fas la-search"></span>
            <input type="search" placeholder="Search here...">
        </div> -->

   <div class="dropdown open">
      <a class="" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <div class="user-wrapper">
            <?php if (isset($_SESSION['user_image']) && $_SESSION['user_image'] == ""): ?>
               <img src="<?= URLROOT; ?>/assets/images/<?= $_SESSION['user_image'] ?>" width="40px" height="40px"
                  alt="Admin">
            <?php else: ?>
               <img src="<?= URLROOT; ?>/assets/images/profile.jpg" width="40px" height="40px" alt="Admin">
            <?php endif; ?>

         </div>
      </a>
      <div class="dropdown-menu" aria-labelledby="triggerId">
         <p class="dropdown-item disabled text-dark border-bottom mb-0">
            <?= $_SESSION['user_fname'] ?>
         </p>
         <small type="button" class="dropdown-item text-dark py-1" data-bs-toggle="modal"
            data-bs-target="#list-nft">List NFT</small>
         <small class="dropdown-item text-dark py-1" type="submit" data-bs-toggle="modal"
            data-bs-target="#update-profile">Update Profile</small>
         <small class="dropdown-item text-danger py-1"
            onclick="window.location.href='<?= URLROOT; ?>/creator.php?logout=1'" type="button">Logout
         </small>
      </div>
   </div>
</header>