<?php $title= "share"; ?>
<!-- we call the constants page before the _header one because it contain some informatons that mast be included before calling the head page. -->
<?php include('partials/_header.php'); ?>

    <div id="main-content">
      <form method="POST">
        <textarea name="code" id="code" placeholder="Write your code here!" required="required"></textarea>
          <div class="btn-group navi" id="navi">
            <a href="share.php" class="btn btn-danger"> Clear All </a>
              <input type="submit" name="save" id="save" class="btn btn-success" value="Save" />
          </div>
      </form>
    </div>

<!-- SCRIPTS  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"></script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" integrity="sha384-VI5+XuguQ/l3kUhh4knz7Hxptx47wpQbVRDnp8v7Vvuhzwn1PEYb/uvtH6KLxv6d" crossorigin="anonymous"></script>
<script src="assets/js/tabby.min.js"> </script>

<script>
// un script qui permet de faire une tabulation
  $("#code").tabby();
// a script to make the div fitting on the windows
  $("#code").height($(window).height() - 50 );
</script>
