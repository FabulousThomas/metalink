<section class="section sellers" aria-labelledby="sellers-label">
  <div class="container">

    <h2 class="headline-md section-title text-center" id="sellers-label">Best Creators & Sellers</h2>

    <ul class="grid-list">

      <?php $getCreator = selectAll("users", "user_id"); ?>
      <?php if (mysqli_num_rows($getCreator) > 0): ?>
        <?php foreach ($getCreator as $row): ?>
          <li>
            <div class="seller-card card px-2 py-2">

              <div class="d-flex align-items-center justify-content-between">
                <figure class="card-banner mt-2 position-relative">
                  <img src="<?= URLROOT; ?>/uploads/<?= $row['user_image']; ?>" width="64" height="64" loading="lazy"
                    alt="<?= $row['user_fname']; ?> profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper ms-2">
                  <h3 class="title-sm">
                    <a href="<?= URLROOT; ?>/creator?user=<?= $row['user_id']; ?>" class="link:hover">
                      <?= $row['user_fname']; ?>
                    </a>
                  </h3>

                  <p class="user-name label-md">
                    <?= '@' . $row['user_name']; ?>
                  </p>
                </div>

                <button class="btn-icon outline" aria-label="Hire <?= $row['user_fname']; ?>">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>
              </div>

            </div>
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">No Creators</p>
      <?php endif; ?>

    </ul>

  </div>
</section>