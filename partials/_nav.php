
<body class="module-home" data-spy="scroll" data-target=".navbar">

  <!-- header -->

     <header role="header" class="header-top" id="headere-top">

         <div class="header-fixed-wrapper" role="header-fixed">

               <div class="container">

                 <div class="row">
                   <div class="col-md-9 col-12">

                   </div>
                   <div class="col-md-3 col-12 membres">

                         <ul>
                           <!-- faire en sorte que les menus s'enregistre est s'identifier ne soient pas visible au moment ou l'utulisateur est connecté -->
                         <?php if(is_logged_in() ): ?>

                           <a href="logout.php" title="Enregistrement"> Deconnexion </a>


                         <?php else : ?>
                            <a href="abonnement.php" title="Abonnement au niews letters"> S'abonner </a>

                           <li><a href="login.php" title="Identification"> S'identifier </a></li>

                           <li><a href="register.php" title="Enregistrement"> S'enregistre </a></li>
                         <?php endif; ?>


                         </ul>

                   </div>
                 </div>

                   <!-- hgroup -->

                   <hgroup class="row">

                       <!-- logo -->

                       <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2">

                           <h1>

                               <a href="index.php" title="Logo kiwanis"><img src="assets/images/logo_kiwanis.png" alt="Logo Kiwanis" title="Logo Kiwanis"/></a>

                           </h1>

                       </div>


                       <!-- logo -->

                       <!-- nav -->

                       <nav role="navigation" class="col-xs-12 col-sm-10 col-md-10 col-lg-10 navbar navbar-default">

                           <div class="navbar-header">

                               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                                   <span class="sr-only">Toggle navigation</span>

                                   <span class="icon-bar"></span>

                                   <span class="icon-bar"></span>

                                   <span class="icon-bar"></span>

                               </button>

                           </div>

                           <div id="navbar" class="navbar-collapse collapse">

                               <ul class="nav navbar-nav">

                                  <li class="<?= set_active('index')?>"> <a href="index.php" title="Activités"> Accueil </a> </li>



                                 <li class="<?= set_active('histoire') ?>"><a href="histoire.php" title="Histoire"> Histoire </a></li>

                              <?php if(is_logged_in() ): ?>
                                <li class="<?= set_active('reunions') ?>"><a href="reunions.php" title="Réunions">Réunions</a></li>
                              <?php endif; ?>
                                <li class="<?= set_active('evenements') ?>"><a href="evenements.php" title="Agenda / Spectacles"> Evenements </a></li>

                                   <li class="<?= set_active('actions') ?>"><a href="actions.php" title="Actions"> Actions </a></li>

                                   <li class="<?= set_active('partenaires') ?>"><a href="partenaires.php" title="Partenaires"> Partenaires </a></li>

                                   <li class="<?= set_active('medias') ?>"><a href="medias.php" title="Photos / Videos"> Medias </a></li>

                                   <li class="<?= set_active('contact') ?>"><a href="contact.php" title="Contact"> Contact </a></li>


                               </ul>

                           </div>

                       </nav>

                       <!-- nav -->

                   </hgroup>

                   <!-- hgroup -->

                 </div>

           </div>
