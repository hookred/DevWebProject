<div class="container">
    <h1>Blog techno web</h1>

    <div class="card-deck">

    <?php foreach($posts as $post): ?>

        <div class="card">
            <img class="card-img-top" src="/dist/img/<?= $post['preview']; ?>" />
            <div class="card-body">
                <h5 class="card-title"><?= $post['name']; ?></h5>
                <p class="card-text"><?= $post['description']; ?></p>
            </div>
        </div>

    <?php endforeach; ?>

    </div>

</div>
