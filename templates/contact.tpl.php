<?php /* If result is present, show message */ ?>
<?php if ( isset($result) ): ?>
  <?php if ( $result ): // it worked! ?>
    <div class="alert alert-success">Thanks for your feedback!</div>
  <?php else: // it didn't work :( ?>
    <div class="alert alert-danger">Something went wrong!</div>
  <?php endif; ?>
<?php endif; ?>

<?php /* Our contact form. The action attribute is the URL the form sends data to. The method attribute is the HTTP method it uses. Usually you'll want to use "post". POSTed data is available to PHP via the $_POST array. */ ?>
<form action="contact.php" method="post">
  <div class="form-group">
    <label for="contact_name">Your Name:</label>
    <input type="text" name="name" id="contact_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="contact_email">Your Email Address:</label>
    <input type="email" name="email" id="contact_email" class="form-control">
  </div>

  <div class="form-group">
    <label for="contact_message">Message:</label>
    <textarea name="message" rows="5" class="form-control"></textarea>
  </div>

  <input type="submit" value="Submit" class="btn btn-primary">
</form>