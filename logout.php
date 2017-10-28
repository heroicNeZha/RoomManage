<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 21:51
 *
 */
session_start();
setcookie(session_name(), session_id(), time()-1,'/');
session_destroy();
?>
<script>
    window.location="sign-in.php";
</script>
