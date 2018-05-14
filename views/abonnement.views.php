
<?php include('partials/_header.php'); ?>

<?php include('partials/_nav.php'); ?>

</header>
<!-- section-one -->

<!-- section-six -->
<section class="section-abonner" id="section-abonner">

  <div class="container-fluid">


       <header role="title-page" class="text-center">

            <h4>S'abonner</h4>

            <h2>Abonnez-vous pour obtenir des mise à jour mensuelle des produits<br/> et des offres exclusives</h2>

        </header>

        <!-- subscribe -->

        <div class="subscribe-form">

            <div class="ntify_form">

                <form method="post" action="php/subscribe.php" name="subscribeform" id="subscribeform">

                    <input name="email" type="email" id="subemail" placeholder="Adresse-Email">


                    <button type="submit" name="" value="Envoyer">

                    S'abonner <i class="fa fa-envelope" aria-hidden="true"></i></button>

                </form>

                <!-- subscribe message -->

                <div id="mesaj"></div>

                <!-- subscribe message -->

            </div>

        </div>

        <!-- subscribe -->

    </div>

</section>

<?php include('partials/_footer.php'); ?>
