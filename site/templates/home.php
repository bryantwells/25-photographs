<?php snippet('header', ['title' => '25 Photographs']) ?>
<main>

    <!-- Info -->
    <header class="Meta Meta--header is-expanded">
        <h1 class="Meta-header">25 Photographs</h1>
        <section class="Meta-body">
            <?= $site->statement()->kirbytext() ?>
        </section>
    </header>

    <!-- Prompts -->
    <?php $collections = $site->index()->filterBy('template', 'collection') ?>
    <?php foreach ($collections as $collection): ?>
        <article class="Prompt">
            <div class="Prompt-container">
                <a class="Prompt-link" href="<?= $collection->url() ?>"><?= $collection->num() ?><br><?= $collection->title() ?></a>
            </div>
        </article>
    <?php endforeach ?>

    <!-- FAQ -->
    <section class="Meta Meta--faq">
        <h2 class="Meta-header">FAQ</h2>
        <dl class="Meta-body">
            <?php $faqs = $site->faqs()->toStructure() ?>
            <?php foreach ($faqs as $faq): ?>
                <dt><?= $faq->question() ?></dt>
                <dd><?= $faq->answer()->kirbytext() ?></dd>
            <?php endforeach ?>
        </dl>
    </section>

    <!-- Footer -->
    <article class="Meta Meta--footer">
        <h2 class="Meta-header">Colophon</h2>
        <section class="Meta-body">
            <?= $site->colophon()->kirbytext() ?>
        </section>
    </article>

</main>
<?php snippet('footer') ?>