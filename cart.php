<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($_SESSION ['cookies'] as $id => $cookie){
       echo $cookie .'<br>' ;
       }
       ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
