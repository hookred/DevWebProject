<div class="container">
    <h1>TechBlog</h1>
    <h2>Autant parler des nouvelles technologies!</h2>

    <div class="row">

        <?php foreach($posts as $post): ?>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img class="card-img-top" src="/public/img/<?= $post['preview']; ?>" alt="<?= $post['name']; ?>" />
                <div class="card-body">
                    <h5 class="card-title"><?= $post['name']; ?></h5>
                    <p class="card-text"><?= $post['description']; ?></p>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
</div>
