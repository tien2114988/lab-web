<div class="main-content col-8 p-0 border border-black border-top-0 border-right-0">
                <div class="main-content__title fs-4 ps-4 py-1"> Top Products </div>
                <div class="main-content__cards">
                    <div class="row row-cols-1 row-cols-md-3 g-4 ps-3 pe-5">
                        <?php
foreach ($productList as $product) {
    ?>
                        <div class="col">
                            <div class="card border border-black rounded-0">
                                <img src="<?php echo $product->getImage(); ?>" class="card-img-top border border-bottom" alt="...">
                                <div class="card-body pt-2">
                                    <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                                    <p class="card-text">Price: <?php echo $product->getPrice(); ?>$</p>
                                    <a href="../app/index.php?productID=<?php echo $product->getID(); ?>" class="btn card__buybtn border border-black px-4 py-1">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <?php
}
?>
                    </div>
                </div>

                <nav aria-label="main-content__pagenum">
                    <ul class="pagination d-flex justify-content-end my-4 pe-5">
                        <li class="page-item <?php if ($currentPage == 1) {
    echo 'disabled';}?>"><a class="page-link" href="../app/index.php?currentPage=<?php echo $currentPage - 1; ?>">Previous</a></li>
                        <?php foreach ($pageNumList as $pageNum) {?>
                            <li class="page-item <?php if ($pageNum == $currentPage) {
    echo 'active';}?>"><a class="page-link" href="../app/index.php?currentPage=<?php echo $pageNum; ?>"><?php echo $pageNum; ?></a></li>
                        <?php }?>
                        <li class="page-item <?php if ($currentPage == $maxPage) {
    echo 'disabled';}?>"><a class="page-link" href="../app/index.php?currentPage=<?php echo $currentPage + 1; ?>">Next</a></li>
                    </ul>
                </nav>
            </div>

