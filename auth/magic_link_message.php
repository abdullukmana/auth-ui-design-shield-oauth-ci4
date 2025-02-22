<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.useMagicLink') ?> <?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 bg-body-tertiary d-flex flex-column justify-content-sm-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.useMagicLink') ?></h1>
                    <p class="text-muted"><?= lang('Auth.checkYourEmail') ?></p>
                    <p class="text-muted"><?= lang('Auth.magicLinkDetails', [setting('Auth.magicLinkLifetime') / 60]) ?></p>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>