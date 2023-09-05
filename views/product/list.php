<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <a href="?page=product&action=create" class="btn btn-outline-primary">Create a new product</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $item):?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->name ?></td>
                        <td><?php echo $item->price ?></td>
                        <td><?php echo $item->description ?></td>
                        <td><?php echo $item->qty ?></td>
                        <td><a href="#" class="btn btn-outline-primary">Add to cart</a> </td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Chắc chắn muốn xoá sản phẩm: <?php echo $item->name ?>')" href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>