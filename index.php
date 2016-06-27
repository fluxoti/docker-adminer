<?php
function adminer_object() {
  
  class AdminerSoftware extends Adminer {
    
    /** Print login form
    * @return null
    */
    function loginForm() {
        global $drivers;
        ?>
<table cellspacing="0">
<tr><th><?php echo lang('System'); ?><td><?php echo html_select("auth[driver]", ['pgsql'], DRIVER); ?>
<tr><th><?php echo lang('Server'); ?><td><input name="auth[server]" value="<?php echo getenv('ADMINER_DEFAULT_HOST') ?>" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th><?php echo lang('Username'); ?><td><input name="auth[username]" id="username" value="<?php echo getenv('ADMINER_DEFAULT_USER') ?>" autocapitalize="off">
<tr><th><?php echo lang('Password'); ?><td><input type="password" name="auth[password]" value="<?php echo getenv('ADMINER_DEFAULT_PASS')?>">
<tr><th><?php echo lang('Database'); ?><td><input name="auth[db]" value="<?php echo getenv('ADMINER_DEFAULT_DB') ?>" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById('username'));
</script>
<?php
        echo "<p><input type='submit' value='" . lang('Login') . "'>\n";
        echo checkbox("auth[permanent]", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
    }
  }
  
  return new AdminerSoftware;
}

include "./adminer.php";