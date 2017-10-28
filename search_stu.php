<?php
/**
 * Created by PhpStorm.
 * User: ak-hyeon-chal
 * Date: 17/4/19
 * Time: 20:11
 */
if(isset($_POST["submit"])&&$_POST["submit"]){
    ?>
    <script>
        window.location="1_DRM_stu_detail.php?stu=<?php echo $_POST["stu"];?>"
    </script>
    <?php
}