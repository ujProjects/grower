<div class="menu-panel bg-white border-top d-none">
    <ul class="d-flex justify-content-between py-2 m-0 px-4">
        <li class="active"><a href=""><i class="icofont-home text-dark"></i></a></li>
        <li><a href=""><i class="icofont-list text-dark"></i></a></li>
        <li><a href=""><i class="icofont-plus text-dark"></i></a></li>
        <li><a href=""><i class="icofont-heart text-dark"></i></a></li>


        <?php if ($_SESSION[registred] == true): ?>
            <li><a href="account.php"><i class="icofont-user text-dark"></i></a></li>
        <?php else: ?>
            <li><a href="register.php"><i class="icofont-user text-dark"></i></a></li>
        <?php endif ?>



    </ul>
</div>
