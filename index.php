<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deserunt dolores eius eum ipsa iste itaque maxime natus omnis quasi quia quibusdam, quo quos rem rerum sapiente, sit tempore voluptate.
<?php
$nama = 'Hafis';
$kampus = 'PENS';
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $nama ?></h5>
                    <p class="card-text">Kampus : <?= $kampus ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$data = [
    [
        'title' => 'Artikel 1',
        'image' => 'https://images.unsplash.com/photo-1698774268248-540b234b0ee1?auto=format&fit=crop&q=80&w=1936&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
    ],
    [
        'title' => 'Artikel 2',
        'image' => 'https://images.unsplash.com/photo-1698414805297-2578132f62fb?auto=format&fit=crop&q=60&w=600&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
    ],
    [
        'title' => 'Artikel 3',
        'image' => 'https://images.unsplash.com/photo-1682687980976-fec0915c6177?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
    ]
];
?>

<div class="container mt-5">
    <div class="row">
        <?php foreach ($data as $item): ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
                    <h5 class="card-title mt-3"><?= $item['title'] ?></h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $item['content'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>