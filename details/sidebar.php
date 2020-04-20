<div class="d-flex">
  <div class="sidebar px-2 py-3">
    <div class="bborder mx-3 mb-3">
      <h4 class="mb-3">
        <a href="" class="text-white">Logo</a>
      </h4>
    </div>
    <div class="category px-3">
      <ul class="m-0">
        <!-- <li class="my-3 mt-3"><a href="" class="text-muted"><i class="icofont-home mr-2"></i>Home</a></li>
        <li class="my-3 pb-3 bborder"><a href="" class="text-muted"><i class="icofont-box mr-2"></i>Box</a></li> -->
        <p>Categories</p>
        <?php while($category = $mainCategories->fetch_array()): ?>
            <li class="my-3">
                <?php
                    if ($page == "category" && $_GET['id'] == $category['id']) {
                        $active = 'active';
                    }else {
                        $active = '';
                    }
                 ?>
                <a href="category.php?id=<?=$category['id']?>" class="text-muted category-title <?=$active?>"><?=$category['icon']?> <?=$category['title']?>
                </a>
            </li>
        <?php endwhile ?>
      </ul>
    </div>
  </div>

  <!-- NAVBAR - RIGHT-SIDE -->
  <div class="right-side">

    <nav class="nav px-2 bg-white">
      <form class="search form-inline col-md-8">
        <label for="search"><i class="fas fa-search text-muted"></i></label>
        <input type="search" id="search" class="pl-3" placeholder="Search" aria-label="Search">
      </form>
      <ul class="d-flex col-md-4 align-items-center justify-content-end m-0">
        <!-- <li class="mr-2"><a href=""><i class="far fa-bell text-muted"></i></a></li> -->
        <li class="mx-4"><a href="addproduct.php"><i class="fas fa-plus text-muted"></i></a></li>

        <li class="pl-4 border-left">
            <?php if ($_SESSION['registred'] == true): ?>
                  <a href="http://grower.uz/account.php" class="text-muted d-flex align-items-center">
                    Cindy Deitch
                    <div class="border user mx-3">
                        <?php if ($userPhoto): ?>
                            <img src="images/avatars/<?=$userPhoto?>" class="w-100" alt="">
                        <?php else: ?>
                            <img src="images/avatars/default.jpg" class="w-100" alt="">
                        <?php endif; ?>
                  </div>
                  </a>
            <?php else: ?>
                <span class="mr-2">
                <a href="http://grower.uz/register.php" class="text-muted d-inline align-items-center">
                    Regiter
                </a>
                 |
                 <a href="http://grower.uz/login.php" class="text-muted d-inline align-items-center">
                     Login
                </a>
            </span>
            <?php endif; ?>
        </li>
      </ul>
    </nav>
    <!-- LOGO -->
		<div class="logo d-none">
			<h2 class="mt-4"><a href="" class="font-weight-bold text-success ml-4">Logo</a></h2>
		</div>
