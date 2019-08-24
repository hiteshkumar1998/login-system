<?php
include("header.php");
?>
<div class="container" style="width:40%;">
  <h2 class="text-center">Reset Your Password</h2>
  <p class="text-center">An email will be send to you with instruction on how to reset your password.</p>
  <form class="form-inline text-center" action="includes/reset-request.inc.php" method="post">
    <div class="form-group">
      <label>Email: </label>
      <input type="text" name="email" class="form-control"placeholder="Enter you email address">
    </div><br><br>
    <button type="submit" name="reset-request-submit" class="btn btn-default">Receive new password by email</button>
  </form>
</div>
<?php include("footer.php") ?>