<?= $this->extend('auth/layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.email2FATitle') ?> <?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('auth/assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 bg-body-tertiary d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.email2FATitle') ?></h1>
                    <p class="text-muted"><?= lang('Auth.confirmEmailAddress') ?></p>
                </div>
            </div>
            <?php if (session('error') !== null) : ?>
                <div class="row my-3 justify-content-center">
                    <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>   
                </div>
            <?php endif ?>
        </div>
        <form class="container" action="<?= url_to('auth-action-handle') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-3">
                        <input 
                        class="form-control focus-ring focus-ring-dark shadow-none border"
                        type="email" name="email"
                        inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>"
                        <?php /** @var CodeIgniter\Shield\Entities\User $user */ ?>
                        value="<?= old('email', $user->email) ?>" required >
                        <label for="email"><?= lang('Auth.email') ?></label>
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