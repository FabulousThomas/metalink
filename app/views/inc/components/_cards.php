<div class="row">
   <div class="col-lg-3 col-md-6 mb-3">
      <div class="card-single">
         <div>
            <?php $count = getCount('user_id', 'counts', 'users') ?>
            <?php foreach ($count as $counts): ?>
            <h3>
                  <?= $counts['counts'] ?>
               </h4>
               <?php endforeach; ?>
               <span>Users</span>
         </div>
         <div>
            <span class="las la-users"></span>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 mb-3">
      <div class="card-single">
         <div>
            <?php $count = getCount('nft_id', 'counts', 'nfts') ?>
            <?php foreach ($count as $counts): ?>
            <h3>
                  <?= $counts['counts'] ?>
               </h4>
               <?php endforeach; ?>
               <span>NFTs</span>
         </div>
         <div>
            <span class="las la-clipboard-list"></span>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6 mb-3">
      <div class="card-single">
         <div>
            <h3>
               2 ETH
            </h3>
            <span>Gas Fee</span>
         </div>
         <div>
            <div>
               <img src="<?= URLROOT; ?>/assets/images/ethereum.svg" width="30" loading="lazy" alt="ethereum icon"
                  class="d-inline me-2">
            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6">
      <div class="card-single">
         <div>
            <?php
            $total = calculateTotal();
            $row = mysqli_fetch_array($total);
            ?>
            <?php foreach ($total as $totals): ?>
            <h3 class="dropdown-item">
                  <?php if ($row['total'] && $row['total'] != ''): ?>
               <span class="">
                        <?= $totals['total'] . ' ETH' ?>
               </span>
                  <?php else: ?>
               0.0 ETH
                  <?php endif; ?>
            </h3>
            <?php endforeach; ?>
            <span>Total</span>
         </div>
         <div>
            <img src="<?= URLROOT; ?>/assets/images/ethereum.svg" width="30" loading="lazy" alt="ethereum icon"
               class="d-inline me-2">
         </div>
      </div>
   </div>
</div>