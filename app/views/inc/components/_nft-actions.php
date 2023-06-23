<?php if (isLoggedin() && $_SESSION['user_id'] == $row->user_id): ?>
   <div class="dropdown position-absolute top-0 start-0">
      <a class="bg-theme px-3 py-1 rounded-3 dropdown-toggle text-light" type="button" data-bs-toggle="dropdown">
         <i class="fas fa-ellipsis-v fa-xs text-light"></i>
      </a>

      <ul class="dropdown-menu">
         <form method="post">
            <input type="hidden" name="nft_id" value="<?= $row->nft_id ?>">
            <?php if ($row->visibility == '0'): ?>
         <li>
            <button class="dropdown-item" name="btn-hide-item" title="Hide Item">
               <h5 class="text-dark fw- mb-0">
                  <i class="fas fa-eye-slash fa-xs text-dark"></i> Hide Item
               </h5>
            </button>
         </li>
            <?php else: ?>
         <li>
            <button class="dropdown-item" name="btn-show-item" title="Show Item">
               <h5 class="text-dark fw- mb-0">
                  <i class="fas fa-eye fa-xs text-dark"></i> Show Item
               </h5>
            </button>
         </li>
         <li>
               <?php endif; ?>
            <button type="submit" class="dropdown-item btn-delete" name="btn-delete-nft" title="Note: This action will not be reversed. 
Are you sure to delete this Item?">
               <h5 class="mb-0 text-danger">
                  <i class="fas fa-trash fa-xs text-danger"></i>
                  Delete Item
               </h5>
            </button>
         </li>
      </form>
   </ul>
</div>
<?php endif; ?>