<?php
if (isLoggedin()) {
   $user_id = $_SESSION['user_id'];

   $result = selectWhere("users", "user_id", $user_id, 'user_id');
   $row = mysqli_fetch_assoc($result);
   if (isset($row) && $row['user_id'] === $user_id) {
      $user_bio = $row['user_bio'];
      $user_name = $row['user_name'];
      $user_fname = $row['user_fname'];
      $user_image = $row['user_image'];
      $user_access = $row['user_access'];
   }

   $result = selectWhere("nfts", "user_id", $user_id, 'nft_id');
   $row = mysqli_fetch_assoc($result);
   if (isset($row) && $row['user_id'] === $user_id) {
      $nft_user_fname = $row['user_fname'];
      $nft_user_name = $row['user_name'];
      $nft_user_bio = $row['user_bio'];
      $nft_user_image = $row['user_image'];
   }
}
?>

<header class="header" data-header>
   <div class="container">
      <?= SITELOGO_SM; ?>
      <nav class="navbar" data-navbar>
         <ul class="navbar-list">

            <li>
               <a href="<?= URLROOT ?>" class="navbar-link label-lg link:hover">Home</a>
            </li>

            <li>
               <a href="<?= URLROOT; ?>/explore" class="navbar-link label-lg link:hover">Discover Assets</a>
            </li>

            <!-- <li>
               <a href="<?= URLROOT; ?>/collections.php" class="navbar-link label-lg link:hover">Collections</a>
            </li> -->

            <li>
               <a href="<?= URLROOT; ?>/#contact" class="navbar-link label-lg link:hover">Contact</a>
            </li>

         </ul>
      </nav>

      <div class="header-action">
         <?php if (!isLoggedin()): ?>
         <button class="btn-icon primary" aria-label="wallet" type="button" data-bs-toggle="modal"
            data-bs-target="#login-form">
            <ion-icon name="wallet-outline"></ion-icon>
         </button>
         <?php else: ?>
         <div class="dropdown open">
            <button class="btn-icon profil-btn" type="button" id="triggerId" data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                  <?php if (isset($user_image) && $user_image != ""): ?>
               <img src="<?= URLROOT ?>/uploads/<?= $user_image ?>" width="50" height="50" alt="Fiona doe"
                        class="img-cover">
                  <?php else: ?>
               <img src="<?= URLROOT ?>/assets/images/profile.jpg" width="50" height="50" alt="Fiona doe"
                        class="img-cover">
                  <?php endif; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="triggerId" style="width: 300px;">
               <h3 class="dropdown-item disabled text-center text-dark border-bottom py-2">
                     <?= $user_fname ?>
               </h3>
               <h4 class="dropdown-item disabled text-dark mb-0">Wallet:</h4>
               <h4 class="dropdown-item disabled text-dark text-truncate w-100">
                  0x18339B0FA6400CEA626ca4462be3150D8B207e90</h4>

                  <?php $total = calculateBalance();
                  $row = mysqli_fetch_array($total); ?>
                  <?php foreach ($total as $totals): ?>
               <h4 class="dropdown-item disabled text-dark">Balance:
                        <?php if ($row['total'] && $row['total'] != ''): ?>
                  <span class="text-dark d-inline">
                              <?= $totals['total'] . ' ETH' ?>
                  </span>
                        <?php else: ?>
                  0.0 ETH
                        <?php endif; ?>
               </h4>
                  <?php endforeach; ?>

                  <div class="d-flex">
                     <h4 class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#deposit">
                        <span class="fas fa-money-check fa-sm"></span>
                        Deposit
                     </h4>
                     <h4 class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#withdraw">
                        <span class="fas fa-money-check-alt fa-sm"></span>
                        Withdraw
                     </h4>
                  </div>

                  <h4 class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#list-nft"><span
                        class="fas fa-file-upload fa-sm"></span> Add Assets</h4>
                  <h4 class="dropdown-item">
                     <a href="<?= URLROOT; ?>/creator?user=<?= $user_id ?>" class="text-dark">
                     <span class="fas fa-user fa-sm"></span>
                        Profile</a>
                  </h4>
                  <?php if (isset($user_access) && $user_access == 1): ?>
               <h4 class="dropdown-item">
                  <a href="<?= URLROOT; ?>/access" class="text-dark">
                           <span class="fas fa-user-circle fa-sm"></span> Admin Access
                        </a>
                     </h4>
                  <?php endif; ?>
               <h4 class="dropdown-item mt-2 border-top">
                  <a href="<?= URLROOT; ?>/explore?logout=1" class="text-dark">
                        <span class="fas fa-power-off fa-sm rotate-360-deg"></span>
                        Logout
                     </a>
                  </h4>
               </div>
            </div>

         <?php endif; ?>

         <button class="nav-toggle-btn" aria-label="menu toggle" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true" class="default-icon"></ion-icon>

            <ion-icon name="close-outline" aria-hidden="true" class="active-icon"></ion-icon>
         </button>

      </div>

   </div>
</header>