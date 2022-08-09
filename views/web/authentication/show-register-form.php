<?php require_once('views/web/layouts/app.php') ?>
<?php require_once('core/Flash.php') ?>

<?php startblock('hero') ?>
  <?php include('views/web/layouts/includes/hero1.php') ?>
<?php endblock('') ?>

<?php startblock('content') ?>
<div class="container-fluid pt-5">
  <div class="text-center mb-4">
    <h2 class="section-title px-5"><span class="px-2">REGISTER</span></h2>
  </div>
  <div class="row px-xl-5 mb-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="contact-form">
        
        <form name="sendMessage" id="contactForm" action="<?php echo url('Authentication/register') ?>" method="POST">
            <div class="control-group">
            <input type="text" class="form-control" name="name" placeholder="Name"  />
            <?php if (isset($errors['name'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['name'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          </div>
          <div class="control-group">
            <input type="email" class="form-control" name="email" placeholder="Email"  />
            <?php if (isset($errors['email'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['email'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          </div>

          <div class="control-group">
            <input type="password" class="form-control" name="password" placeholder="Password"  />
            <?php if (isset($errors['password'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['password'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          
          </div>
        
          <div class="control-group">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation"  />
            <?php if (isset($errors['password_confirmation'])) { ?>
              <p class="help-block text-danger"><?php echo $errors['password_confirmation'] ?></p>
            <?php } else { ?>
              <p></p>
            <?php } ?>
          
          </div>

        <button class="btn btn-primary py-2 px-4" type="submit" name="register">Register</button>
        </form>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </div>

</div>

<?php endblock() ?>