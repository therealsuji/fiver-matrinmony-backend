<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="<?= base_url('assets/logo.png') ?>" id="icon" alt="logo"/>
        </div>

        <!-- Login Form -->
        <form class="login-form" method="post" >

            <label for="login">Username</label>
            <input type="text" id="username" name="username" value="<?= set_value('username') ?>">
            <span class="error">
                <?php if (isset($validation)) {
                    echo $validation->getError('username');
                } ?>
            </span>

            <label for="login">Password</label>
            <input type="password" id="password" name="password">
            <span class="error">
                 <?php if (isset($validation)) {
                     echo $validation->getError('password');
                 } ?>
            </span>

            <input type="submit">

        </form>


    </div>
</div>