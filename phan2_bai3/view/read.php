<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid p-5">
        <h1 class="mb-5">Read A Product</h1>

        <form class="" method="post">
            <div class="content container-fluid row my-4 w-75">
                <div class="row mb-3">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <p class="col-sm-10 my-auto"><?php echo $product->getID(); ?></p>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <p class="col-sm-10 my-auto"><?php echo $product->getName(); ?></p>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <p class="col-sm-10 my-auto"><?php echo $product->getDescription(); ?></p>
                </div>
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <p class="col-sm-10 my-auto"><?php echo $product->getPrice(); ?>$</p>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <img class="img-fluid w-75" src="<?php echo $product->getImage(); ?>" alt="">
                </div>
            </div>
        </form>
        <a class="btn btn-secondary m-3" href="../app/index.php">Cancel</a>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
