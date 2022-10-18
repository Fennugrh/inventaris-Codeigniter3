<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Registration Page</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name') ?>">
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class=" form-group mb-3">
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                        <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>

                    <!-- /.col -->
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>

            <a href="<?= base_url('auth/') ?>" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->