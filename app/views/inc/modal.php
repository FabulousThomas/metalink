<!-- UPLOAD PROFILE IMAGE -->
<div class="modal fade" id="upload-image" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Upload Profile Photo</h3>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
               <div class="form-group mb-2 bg-transparent border rounded-3 px-3">
                  <small class="ps-2 text-white" for="image">Photo</small>
                  <input type="file" name="image" accept="image/*"
                     class="form-control border-0 px-2 shadow-none bg-transparent text-white" required>
               </div>

               <div class="form-group mt-3 d-flex align-items-center justify-content-center">
                  <input type="submit" class="btn btn-sm form-control border-0 px-2 rounded-3 py-2"
                     name="btn-upload-image" value="Upload">
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- LOGIN -->
<div class="modal fade" id="login-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <div class="modal-body">
            <form method="POST">

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Email</small>
                  <input type="email" name="email"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" placeholder="Email"
                     required>
               </div>

               <div class="form-group mb-2 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Password</small>
                  <input type="password" name="password"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0"
                     placeholder="Password" required>
               </div>

               <div class="form-group mt-3 d-flex align-items-center justify-content-between">
                  <input type="submit" class="btn py-2 rounded-3" name="login" value="Login">

                  <a type="button" data-bs-toggle="modal" data-bs-target="#reg-form" class="text-white">
                     Don't have account? Register
                  </a>

               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- REGISTER -->
<div class="modal" id="reg-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <div class="modal-body">
            <form method="POST">

               <div class="form-group mb-2 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Full Name</small>
                  <input type="text" name="name"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0"
                     placeholder="Full Name" required>
               </div>

               <div class="form-group mb-2 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Username</small>
                  <input type="text" name="username"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0"
                     placeholder="Username" required>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Email</small>
                  <input type="email" name="email"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" placeholder="Email"
                     required>
               </div>

               <div class="form-group mb-2 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Password</small>
                  <input type="password" name="password"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0"
                     placeholder="Password" required>
               </div>

               <div class="form-group mt-3 d-flex align-items-center justify-content-between">
                  <input type="submit" class="btn py-2 rounded-3" name="register" value="Register">
                  <a type="button" data-bs-toggle="modal" data-bs-target="#login-form" class="text-white">Have
                     account? Login</a>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- LIST NFT -->
<div class="modal fade" id="list-nft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
   aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Add your art/nft</h3>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">

               <div class="form-group row mb-2 px-">
                  <div class="col-lg-6 mb-2 px-0 bg-transparent">
                     <small class="ps-2 text-white">Art Title</small>
                     <input type="text"
                        class="form-control border-0 rounded-0 border-bottom px-2 shadow-none bg-transparent text-white"
                        name="nft_name" placeholder="NFT Title" required>
                  </div>

                  <div class="col-md-6 mb-2 px-0 bg-transparent">
                     <small class="ps-2 text-white">NFT Price(ETH)</small>
                     <input type="text"
                        class="form-control border-0 rounded-0 border-bottom px-2 shadow-none shadow-none bg-transparent text-white"
                        name="nft_price" placeholder="NFT Price" required>
                  </div>
               </div>

               <div class="form-group row mb-2 px-">
                  <div class="col-lg-6 mb-2 px-0 bg-transparent">
                     <small class="ps-2 text-white" for="nft_image">Image</small>
                     <input type="file"
                        class="form-control border-0 rounded-0 border-bottom px-2 shadow-none bg-transparent text-white"
                        name="nft_image" placeholder="NFT Image" required>
                  </div>
                  <div class="col-md-6 mb-2 px-0 bg-transparent">
                     <small class="ps-2 text-white" for="nft_tag">Type</small>
                     <input type="text"
                        class="form-control border-0 rounded-0 border-bottom px-2 shadow-none bg-transparent text-white"
                        name="nft_tag" placeholder="art, music, nature, memes, tech" required>
                  </div>
               </div>

               <div class="form-group mb-2 col-lg-12 px-0 bg-transparent">
                  <small class="ps-2 text-white" for="nft_description">Description</small>
                  <textarea
                     class="form-control border-0 rounded-0 border-bottom px-2 shadow-none bg-transparent text-white"
                     name="nft_description" rows="3" placeholder="Art/NFT Description (Optional)"></textarea>
               </div>

               <div class="form-group mt-3">
                  <input type="submit" class="btn form-control border-0 px-2 rounded-3" name="list-nft"
                     value="Create Item">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- CONFIRMATION -->
<div class="modal fade" id="confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <div class="modal-body">

            <div class="form-group mb-2">
               <p class="text-white">A fee of 0.1 Eth has to be paid before your Withdrawal is processed</p>
            </div>

            <div class="form-group mt-3 d-flex align-items-center justify-content-between">

               <button type="button" data-bs-toggle="modal" data-bs-target="#withdraw"
                  class="btn btn-sm btn-light form-control border-0 px-2 rounded-3 py-2 mt-3 me-1"
                  role="button">Proceed</button>

               <button type="button" data-bs-dismiss="modal"
                  class="btn btn-sm btn-light form-control border-0 px-2 rounded-3 py-2 mt-3 ms-1"
                  role="button">Cancel</button>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- END -->

<!-- WITHDRAW -->
<div class="modal fade" id="make-payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <div class="modal-body">


            <div class="text-white text-center col-12 mb-5">
               <h3 class="text-center">Confirm Payment</h3>
               <p>Make payment to the ETH wallet below</p>
               <div class="input-group mb-3">
                  <input type="text" class="form-control border-0 px-2 shadow-none"
                     value="0x18339B0FA6400CEA626ca4462be3150D8B207e90" id="wallet">
                  <button class="btn py-2" onclick="myFunction()">Copy</button>
               </div>

               <div class="mt-5">
                  <?php if (isset($_POST['proceed_buy_nft'])): ?>
                  <!-- <?php
                     // global $conn;
                     // $paid_nft_id = $_POST['nft_id'];
                     // $paid_user_id = $_SESSION['user_id'];
                     // $paid_buyer_id = $_POST['user_id'];
                     // $paid_user_name = $_SESSION['user_name'];
                     // $paid_user_fname = $_SESSION['user_fname'];
                     // $paid_user_image = $_SESSION['user_image'];
                     // $paid_nft_image = $_POST['nft_image'];
                     // $paid_nft_price = $_POST['nft_price'];
                     // $paid_nft_name = $_POST['nft_name'];
                     // $paid_status = 'pending';
                     // $paid_s_status = $_SESSION['user_id'] ? 'bought' : '';
                     // $paid_b_status = $paid_buyer_id ? 'sold' : '';
                     // $paid_trnx_id = $_POST['trnx_id'];
                     // $paid_nft_description = $_POST['nft_description'];

                     // $conn->query("INSERT INTO sales (nft_id, user_id, seller_id, user_name, user_fname, user_image, nft_image, nft_price, nft_name, status, s_status, b_status, trnx_id, nft_description) VALUES ('$paid_nft_id', '$paid_user_id', '$paid_seller_id', '$paid_user_name', '$paid_user_fname', '$paid_user_image', '$paid_nft_image', '$paid_nft_price', '$paid_nft_name', '$paid_status', '$paid_s_status', '$paid_b_status', '$paid_trnx_id', '$paid_nft_description')");
                     // 
                  
                     // $conn->query("UPDATE nfts SET user_id = '$paid_user_id', user_name = '$paid_user_name', user_fname = '$paid_user_fname', user_image = '$paid_user_image', status = '$paid_status', s_status = '$paid_s_status', b_status = '$paid_b_status', buyer_id = '$paid_buyer_id' WHERE nft_id = '$paid_nft_id'");
                     ?> -->

                  <small>Awaiting confirmation</small>
                  <a href="<?= URLROOT ?>/explore" class="btn btn-sm rounded-3 py-2 mt-3" role="button">Done</a>
                  <?php else: ?>
                  <form method="post" enctype="multipart/form-data">
                     <input type="hidden" name="nft_id" value="<?= $data['singleSet']->nft_id ?>">
                     <div class="form-group mb-0 text-center">
                        <label class="">
                           <input type="checkbox" name="Paid" class="shadow-none d-inline" style="width: 20px;">
                           I confirm this payment is made
                        </label>
                     </div>

                     <div class="form-group mt-3 d-flex align-items-center flex-column">
                        <button name="proceed_buy_nft"
                           class="btn form-control border-0 px-2 py-2 rounded-3 w-100">Paid</button>
                     </div>
                  </form>
                  <?php endif; ?>
               </div>
            </div>


         </div>

      </div>
   </div>
</div>
<!--  -->

<!-- WITHDRAWAL -->
<div class="modal fade" id="withdraw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Withdrawal</h3>
         <div class="modal-body">
            <form method="POST">
               <?php if (isLoggedin()): ?>
               <?php $total = calculateBalance();
                  $row = mysqli_fetch_array($total); ?>
               <?php foreach ($total as $totals): ?>
               <small class="dropdown-item disabled text-white">Balance:
                  <?php if ($row['total'] && $row['total'] != ''): ?>
                  <?= $totals['total'] . ' ETH' ?>
                  <?php else: ?>
                  0.0 ETH
                  <?php endif; ?>
               </small>
               <?php endforeach; ?>
               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Withdrawal Network</small>
                  <select class="form-select shadow-none text-white form-control border-0 px-2 bg-transparent">
                     <option value="Ethereum" class="bg-transparent">Ethereum</option>
                  </select>
               </div>

               <div class="form-group mb-1 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Wallet Address</small>
                  <input type="text" name="wallet-address"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" required>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Amount (ETH)</small>
                  <input type="text" name="deposit-amount"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" required>
               </div>
               <div class="form-group text-center">
                  <sup class="text- ps-2 text-white">Minimum withdrawal of 4 ETH</sup>
               </div>
               <div class="form-group text-center">
                  <sup class="text- ps-2 text-white">Withdrawal Fee 0.343 ETH</sup>
               </div>

               <div class="form-group mt-3 d-flex align-items-center flex-column">
                  <button type="submit" class="btn form-control border-0 px-2 py-2 rounded-3 w-100"
                     name="proceed">Proceed</button>

               </div>
               <?php endif; ?>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- DEPOSIT -->
<div class="modal fade" id="deposit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Deposit</h3>
         <div class="modal-body">
            <form method="POST">
               <div class="form-group mb-1 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white" for="amount">Amount (USD)</small>
                  <input type="text" name="deposit-amount"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" placeholder="150"
                     required>
               </div>

               <div class="form-group">
                  <sup class="text- ps-2 text-white" for="amount">**Minimum deposit of $150**</sup>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white" for="amount">Amount (ETH)</small>
                  <input type="text" name="deposit-amount"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" placeholder="0.00056"
                     required>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white" for="amount">Deposit Method</small>
                  <select class="form-select shadow-none text-white form-control border-0 px-2 bg-transparent">
                     <option value="Ethereum" class="bg-transparent">Ethereum</option>
                  </select>
               </div>

               <div class="input-group mb-3">
                  <input type="text" class="form-control border-0 px-2 shadow-none bg-transparent text-white border"
                     value="0x18339B0FA6400CEA626ca4462be3150D8B207e90" id="wallet">
                  <button type="button" class="btn py-2" onclick="myFunction()">Copy</button>
               </div>

               <div class="form-group mb-0 text-center">
                  <label class="">
                     <input type="checkbox" name="Paid" class="shadow-none d-inline" style="width: 20px;">
                     I have made this payment
                  </label>
               </div>

               <!-- <div class="form-group pb-2 text-center">
                  <sub class="text-center text-dange">**Do not close or refresh this page whilst transaction is
                     ongoing**</sub>
               </div> -->

               <div class="form-group mt-3 d-flex align-items-center flex-column">
                  <input type="submit" class="btn btn-sm form-control border-0 px-2 py-2 rounded-3 w-100" name="proceed"
                     value="Proceed">
               </div>


            </form>
         </div>

      </div>
   </div>
</div>

<!-- BUY NFT -->
<div class="modal fade" id="buy-nft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Buy Nft</h3>
         <div class="modal-body">
            <form method="POST">
               <?php if (isLoggedin()): ?>
               <?php $total = calculateBalance();
                  $row = mysqli_fetch_array($total); ?>
               <div class="d-flex align-items-center justify-content-between px-2">
                  <small class="text-white mb-2">Your balance:
                     <?php foreach ($total as $totals): ?>
                     <?php if ($row['total'] && $row['total'] != ''): ?>
                     <?= $totals['total'] . ' ETH' ?>
                     <?php else: ?>
                     0.0 ETH
                     <?php endif; ?>
                     <?php endforeach; ?>
                  </small>

                  <small class="text-white mb-2">
                     Gas Fee: 0.0 ETH
                  </small>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <input type="hidden" name="nft_id" class="form-control bg-transparent text-white"
                     value="<?= $data['singleSet']->nft_id ?>">
                  <small class="text- ps-2 text-white">NFT Selected</small>
                  <input type="text" name="nft_name"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" aria-disabled="false"
                     disabled value="<?= $data['singleSet']->nft_name ?>" required>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Amount (ETH)</small>
                  <input type="text" name="nft_price"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" aria-disabled="false"
                     disabled value="<?= $data['singleSet']->nft_price ?>" required>
               </div>

               <div class="form-group mt-3 d-flex align-items-center flex-column">
                  <button type="button" class="btn form-control border-0 px-2 py-2 rounded-3 w-100"
                     data-bs-toggle="modal" data-bs-target="#make-payment">Proceed</button>
               </div>
               <?php endif; ?>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- END -->

<!-- UPDATE NFT -->
<div class="modal fade" id="update-nft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
   aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg  ">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Edit Item</h3>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">

               <div class="form-group">
                  <input type="hidden" class="form-control border-0 px-2" name="nft_id" id="nft_id">
               </div>
               <div class="form-group row mb-2">
                  <div class="col-md-6 mb-2">
                     <label class="text-white" for="nft_name1">Title</label>
                     <input type="text" id="nft_name" class="form-control border-0 px-2 shadow-none" value=""
                        name="nft_name" placeholder="NFT Title" required>
                  </div>
                  <div class="col-md-6 mb-2">
                     <label class="text-white" for="nft_price">Price</label>
                     <input type="text" id="nft_price" class="form-control border-0 px-2 shadow-none" value=""
                        name="nft_price" placeholder="NFT Price" required>
                  </div>
               </div>

               <div class="form-group mb-2">
                  <div class="mb-2">
                     <label class="text-white" for="nft_tag">Tag</label>
                     <input type="text" id="nft_tag" class="form-control border-0 px-2 shadow-none" value=""
                        name="nft_tag" placeholder="art, music, nature, memes, tech" required>
                  </div>
               </div>

               <div class="form-group mb-2">
                  <label class="text-white" for="nft_description">NFT Description</label>
                  <textarea id="nft_description" class="form-control border-0 px-2 shadow-none" name="nft_description"
                     rows="3" placeholder="NFT Description (Optional)"></textarea>
               </div>

               <div class="form-group mt-3">
                  <input type="submit" class="btn btn-light btn-sm form-control border-0 px-2 rounded-0"
                     name="update-nft" value="Update">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Edit PROFILE -->
<div class="modal fade" id="edit-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Edit Profile</h3>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">Full Name</small>
                  <input type="text" name="name"
                     class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0"
                     value="<?= $_SESSION['user_fname'] ?>" required>
               </div>

               <div class="form-group mb-3 border rounded-3 px-3 bg-transparent">
                  <small class="text- ps-2 text-white">About Me</small>
                  <textarea class="form-control border-0 px-2 bg-transparent text-white shadow-none py-0" name="bio"
                     rows="2"><?= $_SESSION['user_bio'] ?></textarea>
               </div>

               <div class="form-group mt-3 d-flex align-items-center justify-content-center">
                  <input type="submit" class="btn btn-sm form-control border-0 px-2 rounded-3" name="btn-edit-profile"
                     value="Update Profile">
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- CONFIRM DELETE ITEM -->
<div class="modal fade" id="delete-nft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4">Confirmation</h3>
         <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
               <div class="form-group mb-2 text-center">
                  <p class="text-danger">Note: This action will not be reversed.</p>
                  <p>Are you sure to delete this Item?</p>
                  <p>
                     <?= $_SESSION['nft_id'] ?>
                  </p>
               </div>

               <div class="form-group mt-3 d-flex align-items-center justify-content-evenly">
                  <input type="submit" class="btn btn-sm rounded-3 py-2" name="btn-delete-nf" value="Delete">
                  <input type="button" class="btn btn-sm rounded-3 py-2" data-bs-dismiss="modal" value="Cancel">
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<!-- CONFIRM NFT SALES -->
<div class="modal fade" id="approve_nft_sales" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content bg-theme">
         <div class="modal-header border-0">
            <?= SITELOGO_LG; ?>
            <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close">
               <i class="fas fa-times"></i></a>
         </div>
         <h3 class="text-center text-white text-uppercase pt-4 mb-0">Confirmation</h3>
         <div class="modal-body">
            <form action="index" method="POST" enctype="multipart/form-data">
               <div class="form-group mb-2 text-center">
                  <p class="text-white mb-0">Are you sure to approve this transaction?</p>
                  <p class="text-danger mb-0">Note: This action will transfer ownership to the buyer.</p>

                  <input type="hidden" name="approve_nft_id" id="approve_nft_id"
                     class="form-control text-white bg-transparent shadow-none" value="">

               </div>
               <div class="form-group mt-3 d-flex align-items-center justify-content-evenly">
                  <input type="submit" class="btn btn-sm rounded-3 py-2" name="approve_nft_sales" value="Approve">
                  <input type="button" class="btn btn-sm rounded-3 py-2" data-bs-dismiss="modal" value="Cancel">
               </div>
            </form>
         </div>

      </div>
   </div>
</div>