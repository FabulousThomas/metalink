<?php include "inc/head.php" ?>

<?php if (isLoggedin() && $_SESSION['user_access'] == '1'): ?>

<?php include APPROOT . "/views/inc/sidebar.php" ?>

<div class="main-content">

   <?php include "inc/header.php" ?>

   <main>
      <?php #flashmsg('message') ?>
      <?php include APPROOT . "/views/inc/components/_cards.php" ?>

      <div class="row text-white">
         <div class="projects col-12 mt-3">
            <div class="card">
               <div class="card-header">
                  <h5>Recent NFTs Order</h5>

                  <!-- <button>See all <span class="las la-arrow-right"> </span></button> -->
               </div>
               <div class="card-body">

                  <div class="table-responsive">
                     <table width="100%">
                        <thead>
                           <tr>
                              <td>#</td>
                              <td>NFTs</td>
                              <td>Image</td>
                              <td>price</td>
                              <td>Owner</td>
                              <td>Status</td>
                              <td></td>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                                        $i = 1; ?>
                           <?php if (($data['results']) > 0): ?>
                           <?php foreach ($data['results'] as $row): ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td hidden><?= $row->nft_id ?></td>
                              <td><a href="<?=URLROOT?>/nfts?nft_id=<?=$row->nft_id?>" target="_blank"
                                    class="text-light"><?= $row->nft_name ?></a></td>
                              <td><img src="<?=URLROOT?>/uploads/<?=$row->nft_image?>" class="img-floid"
                                    alt="<?= $row->nft_name ?>" width="35px"></td>
                              <td><?= $row->nft_price ?></td>
                              <td><a href="<?=URLROOT?>/creator?user=<?=$row->user_id?>" target="_blank"
                                    class="text-light"><?= $row->user_name ?></a></td>
                              <?php if($row->visibility == '0'): ?>
                              <td><?= 'Approved' ?></td>
                              <?php elseif($row->visibility == '1'): ?>
                              <td><?= 'Pending' ?></td>
                              <?php else: ?>
                              <td><?= 'Cancelled' ?></td>
                              <?php endif ?>
                              <td hidden><?= $row->nft_description ?></td>
                              <td>
                                 <div class="dropdown open">
                                    <button class="btn btn-btn btn-light btn-sm dropdown-toggle" type="button"
                                       id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                       Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                       <form method="POST">
                                          <button type="submit" class="dropdown-item btn btn-btn btn-sm text-success"
                                             name="approve_nft_sales">Approve</button>
                                          <button type="submit" class="dropdown-item btn btn-btn btn-sm text-danger"
                                             name="cancel_nft_sales">Cancel</button>
                                       </form>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <?php endforeach; ?>
                           <?php else: ?>
                           <tr>
                              <td>
                                 No Listed NFTs
                              </td>
                           </tr>
                           <?php endif; ?>
                        </tbody>
                     </table>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </main>
</div>
<?php else: ?>
<div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
   <div class="col-lg-5 col-md-6 col-12 bg-theme text-white mx-auto rounded-4 text-center p-5">
      <h3 class="text-capitalize mb-4">Access to admin <br>panel</h3>
      <a class="btn text-white" data-bs-toggle="modal" data-bs-target="#login-form" type="button">
         Login To Get Control
      </a>
   </div>
</div>
<?php endif; ?>

<?php require APPROOT . '/views/inc/modal.php'; ?>


<script>
function myFunction() {
   // Get the text field
   var copyText = document.getElementById("wallet");

   // Select the text field
   copyText.select();
   copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
   navigator.clipboard.writeText(copyText.value);

   // Alert the copied text
   alert("Copied the text: " + copyText.value);
}

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

</body>

</html>