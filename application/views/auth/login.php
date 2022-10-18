<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Login Page</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth/index'); ?>">
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" placeholder="email" id="email" name="email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" placeholder="password" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <!-- /.col -->
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->

                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('auth/register') ?>" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->