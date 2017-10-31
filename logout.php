<?php
session_start();
setcookie(session_name(), session_id(), time()-1,'/');
session_destroy();
?>
<script>
    window.location="sign-in.php";
</script>
