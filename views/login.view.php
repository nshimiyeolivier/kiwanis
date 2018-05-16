<?php $title= "login"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>
<?php include('partials/_nav.php'); ?>

</header>

  <section class="section-o" id="section-o" >
    <div class="container-fluid">
      <div class="container">
    <h1 class="lead"> Identifiez-vous </h1>

  <?php include('partials/_errors.php'); ?>

      <form data-parsley-validate method="POST" class="well col-md-6">
        <!-- field identifiant  -->
        <div class="form-group">
          <label class="control-label" for="identifiant"> Votre Pseudo / E-mail: </label>
          <input type="text" value="<?= get_in_put('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required="required"/>
        </div>

        <!--password field  -->
        <div class="form-group">
          <label class="control-label" for="password"> Mot de passe: </label>
          <input type="password" class="form-control" id="password" name="password" required="required"/>
        </div>
        <!--password_confirm field  -->

        <input type="submit" class="btn btn-primary"  value="S'identifier" name="login" id="login">

      </form>
    </div>
    </div><!-- /.container -->
  </section>

<?php include('partials/_footer.php'); ?>
