<?= $this->extend('auth/layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('auth/assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <h1 class="fs-3"><?= lang('Auth.welcomeBack') ?></h1>
                    <p class="text-muted"><?= lang('Auth.enterDetails') ?></p>
                    <a href="<?= base_url('oauth/google') ?>" class="btn btn-lg btn-costum-primary border w-100">
                        <span class="me-3">
                            <svg height="1.5em" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><path d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16" fill="#00ac47"/><path d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16" fill="#4285f4"/><path d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z" fill="#ffba00"/><polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374"/><path d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z" fill="#ea4435"/><polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626"/><path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4"/></svg>
                        </span>
                        <?= lang('Auth.loginWithGoogle') ?>
                    </a>
                </div>
            </div>
        </div>
        <form class="container" action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="position-relative d-flex align-items-center justify-content-center my-4 w-100">
                        <hr class="position-absolute w-100" />
                        <span class="position-absolute badge bg-transparent bg-body-tertiary text-body px-3 border-0 text-uppercase border">or</span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" inputmode="email" autocomplete="email" class="form-control focus-ring focus-ring-dark shadow-none border" id="email" value="<?= old('email') ?>" required placeholder="<?= lang('Auth.email') ?>" >
                        <label for="email"><?= lang('Auth.email') ?></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control focus-ring focus-ring-dark shadow-none border" id="password" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required >
                        <label for="password"><?= lang('Auth.password') ?></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center d-flex gap-1 justify-content-between">
                    <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                        <div class="form-check">
                            <input class="form-check-input shadow-none border text-body" type="checkbox" name="remember" <?php if (old('remember')): ?> checked <?php endif ?>>
                            <label class="form-check-label text-nowrap" for="flexCheckDefault">
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>
                    <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                        <a  href="<?= url_to('magic-link') ?>" class="text-body text-nowrap"><?= lang('Auth.forgotPassword') ?></a>
                    <?php endif ?>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn btn-lg btn-dark border w-100 mb-3">
                        <?= lang('Auth.login') ?>
                    </button>
                    <?php if (setting('Auth.allowRegistration')) : ?>
                        <a href="<?= url_to('register') ?>" class="text-body">
                            <?= lang('Auth.needAccount') ?> 
                        </a>
                    <?php endif ?>
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
                "<?= session('errors') ?>"
            );
        <?php endif ?>
    <?php endif ?>

    <?php if (session('message') !== null) : ?>
        showToastWithStack(
            "text-light bg-success",
            "<?= session('message') ?>"
        );
    <?php endif ?>

</script>
<?= $this->endSection() ?>