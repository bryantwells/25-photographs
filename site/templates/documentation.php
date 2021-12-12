<?php snippet('header') ?>
<main>
    <nav class="Nav"><a href="/" class="Nav-link">Back</a></nav>
    <?php $files = $site->files() ?>
    <?php foreach ($files as $file): ?>
        <article class="Submission<?= ($file->type() == 'video') ? ' is-active' : '' ?>" data-hash="<?= $file->hash() ?>">
                <style>
                    [data-hash='<?= $file->hash() ?>'].is-active {
                        grid-row-start: <?= ceil(($file->indexOf() + 2) / 5) ?>;
                    }
                    @media screen and (max-width: 1000px) {
                        [data-hash='<?= $file->hash() ?>'].is-active {
                            grid-row-start: unset;
                        }
                    }
                </style>
                <figure class="Submission-figure">
                    <?php if ($file->type() == 'image'): ?>
                        <img class="Submission-image" srcset="<?= $file->srcset([300, 600, 1200]) ?>" src="<?= $file->resize(600)->url() ?>" title="Photo by <?= $file->attribution() ?>">
                    <?php elseif ($file->type() == 'video'): ?>
                        <video class="Submission-image" src="<?= $file->url() ?>" autoplay muted></video>
                    <?php endif; ?>
                </figure>
        </article>
    <?php endforeach ?>
</main>
<?php snippet('footer') ?>