<?= $this->extend('auth/layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.useMagicLink') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('auth/assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 bg-body-tertiary d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.useLoginLink') ?></h1>
                    <p class="text-muted"><?= lang('Auth.useLoginLinkDesc') ?></p>
                </div>
            </div>
        </div>
        <form class="container" action="<?= url_to('magic-link') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-3">
                        <input type="email"  class="form-control focus-ring focus-ring-dark shadow-none border" id="floatingEmailInput" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email', auth()->user()->email ?? null) ?>" required >
                        <label for="email"><?= lang('Auth.email') ?></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 d-flex align-items-center gap-2">
                    <button type="submit" class="btn btn-lg btn-costum-primary border col">
                        <?= lang('Auth.send') ?>
                    </button>
                    <a href="<?= url_to('login') ?>" class="btn btn-lg btn-costum-primary border col">
                        <?= lang('Auth.backToLogin') ?>
                    </a>
                </div>
            </div>
        </form>
    </section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->include('auth/assets/js/showToastWithStack') ?>
<script>

    <?php if (session('error') !== null) : ?>
        showToastWithStack(
            "text-light bg-danger",
            "<?= session('error') ?>"
        );
    <?php elseif (session('errors') !== null) : ?>
        <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
                showToastWithStack(
                    "text-light bg-danger",
                    "<?= $error ?>"
                );
            <?php endforeach ?>
                <?php else : ?>
                    showToastWithStack(
                "text-light bg-danger",
                "<?= session('error') ?>"
            );
        <?php endif ?>
    <?php endif ?>

</script>
<?= $this->endSection() ?>