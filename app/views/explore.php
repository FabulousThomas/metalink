<?php require APPROOT . "/views/inc/head.php"; ?>

<!-- #HEADER -->

<?php require APPROOT . "/views/inc/header.php"; ?>

<main>
  <article>

    <!-- #HERO -->

    <section class="section hero" aria-label="home">
      <div class="container">

        <h1 class="headline-lg hero-title">
          Explore Digital <span class="span">Arts & NFTs</span>
        </h1>

        <p class="section-text body-lg">
          Discover digital assets, Arts and NFTs!
        </p>

      </div>
    </section>


    <!-- #DISCOVER ITEM -->

    <section class="section discover" aria-labelledby="discover-label">
      <div class="container">

        <?php require APPROOT . "/views/inc/components/_nfts.php" ?>

      </div>
    </section>


    <!-- SELLERS -->

    <?php require APPROOT . "/views/inc/components/_creators.php" ?>

    <?php require APPROOT . "/views/inc/components/_newsletter.php" ?>

  </article>
</main>


<!--  #FOOTER -->

<?php require APPROOT . "/views/inc/footer.php" ?>