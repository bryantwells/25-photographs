<?php snippet('header', ['title' => $page->num().' '.$page->title()]) ?>
<main>
    <nav class="Nav Nav--back">
        <style>
            .Nav--back .Nav-link::before {
                content: '0';
            }
        </style>
        <a href="/" class="Nav-link">
            Home
        </a>
    </nav>
    <?php if ($page->next()): ?>
        <style>
            .Nav--next .Nav-link::before {
                content: '<?= $page->next()->num() ?>';
            }
        </style>
        <nav class="Nav Nav--next">
            <a href="<?= $page->next()->url() ?>" class="Nav-link">
                <?= $page->next()->title() ?>
            </a>
        </nav>
    <?php endif; ?>
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
</main>
<?php snippet('footer') ?>