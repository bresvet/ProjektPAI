<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>ForumSportowca.org</title>
</head>
<body>
<div class="container">
    <div class="SectionPage">
        <!-- foreach -->
        <?php foreach($sections as $section): ?>
            <div class="wraper">
                <img src="<?= '../Public/images/uploads/'.$section->getImage() ?>">
                <div class="actions-bar">
                    <i class="fas fa-heart"></i> <?= $section->getName() ?>
                    <i class="fas fa-heart-broken"></i> <?= $section->getLastDate() ?>
                    <span class="float-right">SAVE <i class="fas fa-bookmark"></i></span>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <button type="button" class="btn btn-primary"><i class="fas fa-heart"></i> Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</div>
</body>
</html>