<?php snippet('header', ['title' => $page->num().' '.$page->title()]) ?>
<main>
    <?php foreach ($page->prevAll() as $page): ?>
        <nav class="Nav">
            <a href="<?= $page->url() ?>" class="Nav-link">
                <?= $page->num() ?>
                <br><?= $page->title() ?>
            </a>
        </nav>
    <?php endforeach; ?>
    <?php $submissions = $page->files() ?>
    <?php foreach ($submissions as $submission): ?>
        <article class="Submission" data-hash="<?= $submission->hash() ?>">
                <style>
                    [data-hash='<?= $submission->hash() ?>'].is-active {
                        grid-row-start: <?= ceil(($submission->indexOf() + 2) / 5) ?>;
                    }
                    @media screen and (max-width: 1000px) {
                        [data-hash='<?= $submission->hash() ?>'].is-active {
                            grid-row-start: unset;
                        }
                    }
                </style>
                <figure class="Submission-figure">
                    <img class="Submission-image" srcset="<?= $submission->srcset([300, 600, 1200]) ?>" src="<?= $submission->resize(600)->url() ?>" title="Photo by <?= $submission->attribution() ?>">
                    <figcaption class="Submission-caption"><?= $submission->attribution() ?></figcaption>
                </figure>
        </article>
    <?php endforeach ?>
    <?php foreach ($page->nextAll() as $page): ?>
        <nav class="Nav">
            <a href="<?= $page->url() ?>" class="Nav-link">
                <?= $page->num() ?>
                <br><?= $page->title() ?>
            </a>
        </nav>
    <?php endforeach; ?>
</main>
<?php snippet('footer') ?>