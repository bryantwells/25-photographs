<?php snippet('header') ?>
<style>
    /* .CollectionTitle {
        grid-column: <?= ceil($page->num() % 5) + 1 ?> / <?= ceil($page->num() % 5) + 2 ?>;
        grid-row: <?= ceil($page->num() / 5) + 1 ?> / <?= ceil($page->num() / 5) + 2 ?>;
    } */
</style>
<main>
    <h1 class="CollectionTitle"><?= $page->num() ?><br><?= $page->title() ?></h1>
    <?php $submissions = $page->files() ?>
    <?php foreach ($submissions as $submission): ?>
        <article class="Submission">
            <figure class="Submission-figure">
                <img class="Submission-image" src="<?= $submission->url() ?>" title="Photo by <?= $submission->attribution() ?>">
                <figcaption class="Submission-caption"><?= $submission->attribution() ?></figcaption>
            </figure>
        </article>
    <?php endforeach ?>
</main>
<?php snippet('footer') ?>