            <div class="main-content col-8 px-3 border border-black border-top-0 border-right-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-2">
                        <li class="breadcrumb-item"><a href="../app/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Main Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
                    </ol>
                </nav>

                <div class="d-flex flex-wrap flex-direction">
                    <div class="item-img col-6">
                        <div class="pe-3">
                            <img class="img-fluid w-100 border border-black" src="<?php echo $product->getImage(); ?>" alt="">
                        </div>

                        <div class="d-flex flex-wrap item-img__sub pt-2">
                            <a href="" class="px-1">
                                <img class="img-fluid border border-black" src="<?php echo $product->getImage(); ?>" alt="">
                            </a>
                            <a href="" class="px-1">
                                <img class="img-fluid border border-black" src="<?php echo $product->getImage(); ?>" alt="">
                            </a>
                            <a href="" class="px-1">
                                <img class="img-fluid border border-black" src="<?php echo $product->getImage(); ?>" alt="">
                            </a>
                            <a href="" class="px-1">
                                <img class="img-fluid border border-black" src="<?php echo $product->getImage(); ?>" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="item-info col-6">
                        <h3><?php echo $product->getName(); ?> </h3>
                        <h5>Summary :</h5>
                        <p><?php echo $product->getDescription(); ?></p>
                        <div class="text-center py-5">
                            <button type="button" class="btn btn-primary">Buy now</button>
                        </div>

                    </div>
                </div>

                <div class="item-des py-3">
                    <h5>Description:</h5>
                    <p><?php echo $product->getDescription(); ?></p>
                </div>

            </div>
