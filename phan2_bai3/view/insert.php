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
        <h1 class="mb-5"><?php if (isset($_GET['edit'])) {echo 'Edit A Product';} else {echo 'Insert New Product';}?></h1>

        <form method="post" action="../app/index.php<?php if (isset($_GET['edit'])) {echo '?id=' . $product->getID() . '&&edited=';}?>">
            <div class="content container-fluid row my-4 w-75">
                <div class="row mb-3">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="number" min='1' class="form-control" id="id" name="id" value="<?php if (isset($_GET['edit'])) {echo $product->getID();}?>" <?php if (isset($_GET['edit'])) {echo 'disabled';}?>>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" minlength="5" maxlength="40" required value="<?php if (isset($_GET['edit'])) {echo $product->getName();}?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="description" rows="6" name="description" maxlength="5000"required><?php if (isset($_GET['edit'])) {echo $product->getDescription();}?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="0.01" class="form-control" required id="price" name="price" value="<?php if (isset($_GET['edit'])) {echo $product->getPrice();}?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" required maxlength="255" class="form-control" id="image" name="image" value="<?php if (isset($_GET['edit'])) {echo $product->getImage();}?>">
                    </div>
                </div>
                <div class="form-btn d-flex justify-content-end mt-5">
                    <a class="btn btn-secondary m-3" href="../app/index.php">Cancel</a>
                    <button type="submit" class="btn btn-primary m-3" id="submit"><?php if (isset($_GET['edit'])) {
    echo 'Update';
} else {
    echo 'Insert';
}?></button>
                </div>
            </div>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
