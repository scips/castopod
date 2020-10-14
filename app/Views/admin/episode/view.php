<?= $this->extend('admin/_layout') ?>

<?= $this->section('title') ?>
<?= $episode->title ?>
<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<?= $episode->title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
   
<div class="flex flex-wrap">
    <div class="w-full max-w-sm mb-6 md:mr-4">
        <img
            src="<?= $episode->image->medium_url ?>"
            alt="Episode cover"
            class="object-cover w-full"
        />
        <audio controls preload="none" class="w-full mb-6">
        <source src="/<?= $episode->enclosure_media_path ?>" type="<?= $episode->enclosure_type ?>">
        Your browser does not support the audio tag.
        </audio>

        <div class="flex justify-around">
        <?= button(
            lang('Episode.edit'),
            route_to('episode-edit', $podcast->id, $episode->id),
            ['variant' => 'info', 'iconLeft' => 'edit']
        ) ?>
        <?= button(
            lang('Episode.go_to_page'),
            route_to('episode', $podcast->name, $episode->slug),
            ['variant' => 'secondary', 'iconLeft' => 'external-link']
        ) ?>
        <?= button(
            lang('Episode.delete'),
            route_to('episode-delete', $podcast->id, $episode->id),
            ['variant' => 'danger', 'iconLeft' => 'delete-bin']
        ) ?>
        </div>
    </div>

    <section class="w-full max-w-sm prose">
    <?= $episode->description_html ?>
    </section>
</div>


    <div class="mb-12 text-center">
    <h2><?= lang('Charts.episode_by_day') ?></h2>
    <div class="chart-xy" id="by-day-graph" data-chart-type="xy-chart" data-chart-url="<?= route_to(
        'analytics-filtered-data',
        $podcast->id,
        'PodcastByEpisode',
        'ByDay',
        $episode->id
    ) ?>"></div>
    </div>
    
    <div class="mb-12 text-center">
    <h2><?= lang('Charts.episode_by_month') ?></h2>
    <div class="chart-xy" id="by-month-graph" data-chart-type="xy-chart" data-chart-url="<?= route_to(
        'analytics-filtered-data',
        $podcast->id,
        'PodcastByEpisode',
        'ByMonth',
        $episode->id
    ) ?>"></div>
    </div>


<script src="/assets/charts.js" type="module"></script>
<?= $this->endSection() ?>
