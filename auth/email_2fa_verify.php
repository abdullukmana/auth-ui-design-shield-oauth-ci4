<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.email2FATitle') ?>  <?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 bg-body-tertiary d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.emailEnterCode') ?></h1>
                    <p class="text-muted"><?= lang('Auth.emailConfirmCode') ?></p>
                </div>
            </div>
        </div>
        <form class="container" action="<?= url_to('auth-action-verify') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-3">
                        <input 
                        id="token"
                        class="form-control focus-ring focus-ring-dark shadow-none border"
                        type="number" class="form-control" name="token" placeholder="000000"
                        inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" required >
                        <label for="token">code</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 d-flex align-items-center gap-2">
                    <button type="submit" class="btn btn-lg btn-costum-primary border col">
                        <?= lang('Auth.send') ?>
                    </button>
                </div>
            </div>
        </form>
    </section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->include('assets/js/showToastWithStack') ?>
<script>

    <?php if (session('error') !== null) : ?>
        showToastWithStack(
            "text-light bg-danger",
            "<?= session('error') ?>"
        );
    <?php endif ?>

</script>
<?= $this->endSection() ?>