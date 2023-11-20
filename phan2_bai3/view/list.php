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
        <h1 class="mb-5">Read Products</h1>

        <a type="button" class="btn btn-primary mb-3" href="../app/index.php?insert=''">Create New Product</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th class="w-50" scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productList as $product) {?>
                <tr>
                    <td><?php echo $product->getID(); ?></td>
                    <td><?php echo $product->getName(); ?></td>
                    <td><?php echo $product->getDescription(); ?></td>
                    <td><?php echo $product->getPrice(); ?></td>
                    <td>
                        <a type="button" class="btn btn-info text-white" href="../app/index.php?productID=<?php echo $product->getID(); ?>&&read=''">Read</a>
                        <a type="button" class="btn btn-primary" href="../app/index.php?productID=<?php echo $product->getID(); ?>&&edit=''">Edit</a>
                        <a type="button" class="btn btn-danger" href="../app/index.php?productID=<?php echo $product->getID(); ?>&&delete=''">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>