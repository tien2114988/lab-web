<div class="body container-fluid m-0 p-0 border border-black border-top-0">
        <div class="d-flex flex-wrap flex-direction">
            <div class="navigation col p-0">
                <div class="category">
                    <div class="category__title text-center fs-5 py-1 bg-secondary-subtle border border-black"> Category </div>
                    <ul class="category__list ps-2 mb-0 border border-black">
                        <li class="category__item py-1"><a class="category__link" href="">Item 1...</a></li>
                        <li class="category__item py-1"><a class="category__link" href="">Item 2...</a></li>
                        <li class="category__item py-1"><a class="category__link" href="">Item 3...</a></li>
                        <li class="category__item py-1"><a class="category__link" href="">Item 4...</a></li>
                        <li class="category__item py-1"><a class="category__link" href="">Item 5...</a></li>
                    </ul>
                </div>
                <div class="top-products">
                    <div class="category__title text-center fs-5 py-1 bg-secondary-subtle border border-black"> Top Products </div>
                    <ul class="category__list ps-2 mb-0 border border-black">
                    <?php foreach ($topProducts as $product) {?>
                        <li class="category__item py-1"><a class="category__link" href="../app/index.php?productID=<?php echo $product->getID() ?>"><?php echo $product->getName(); ?></a></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
