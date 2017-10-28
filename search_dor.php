<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 20:21
 */
if(isset($_POST["submit"])&&$_POST["submit"]){
    ?>
    <script>
        window.location="1_DRM_dor_detail.php?dor=<?php echo $_POST["dor"];?>"
    </script>
    <?php
}