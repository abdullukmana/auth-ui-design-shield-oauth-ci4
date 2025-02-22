<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.emailActivateTitle') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 bg-body-tertiary d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.emailActivateTitle') ?></h1>
                    <p class="text-muted"><?= lang('Auth.emailActivateBody') ?></p>
                </div>
            </div>
        </div>
        <form class="container" action="<?= url_to('auth-action-verify') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-3">
                        <input class="form-control focus-ring focus-ring-dark shadow-none border" type="text" class="form-control" id="floatingTokenInput" name="token" placeholder="000000" inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" value="<?= old('token') ?>" required>
                        <label for="floatingTokenInput"><?= lang('Auth.token') ?></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn btn-lg btn-dark border w-100 mb-3">
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

    <?php if (session('error')) : ?>
        showToastWithStack(
            "text-bg-danger",
            "<?= session('error') ?>"
        );
    <?php endif ?>

</script>
<?= $this->endSection() ?>