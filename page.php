<?php snippet("header") ?>
<?php snippet("menu") ?>
<h1><?= $page->tittle() ?></h1>

<ul class="project">
    <?php foreach($page->product()->listed( as $project): ?>
        <li>
            <a href="<?= $project->url() ?>">
            <img src="<?= $project->image()->url() ?>" alt="<?= $project->title()
            ?>">
