<?php require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . '../App/jsonToArray.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>users</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- styles -->
    <style>
        .card {
            border-radius: 15px !important;
            max-height: 150px;
            line-height: 3.2px;
        }

        .card:hover {
            box-shadow: inset 0 0 5px #00000041;
            background-color: #00000021;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($users as $item) : ?>
                <?php if ($item->id <= 12) : ?>
                    <!-- =============================================================== -->
                    <!-- ======================= Start Card Item ======================= -->
                    <!-- =============================================================== -->
                    <div class="col-3 my-2">
                        <div class="card" id="item_<?= $item->id ?>">
                            <div class="card-body">
                                <!-- firstName -->
                                <h5 class="card-title"><?= $item->first_name ?> <?= $item->last_name ?></h5>
                                <!-- gender -->
                                <p class="text-card">Gender : <?= $item->gender ?></p>
                                <!-- phone -->
                                <p class="text-card">Phone : <a href="tel: <?= $item->phone ?>"><?= $item->phone ?></a></p>
                                <!-- email -->
                                <p class="card-text">Email : <a href="mailto: <?= $item->email ?>"><?= $item->email ?></a></p>
                                <!-- ip address -->
                                <p class="text-card">IP Address : <?= $item->ip_address ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- =============================================================== -->
                    <!-- ========================= End Card Item ======================= -->
                    <!-- =============================================================== -->
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>