<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>"><img src="<?= base_url('assets/logo.png') ?>"
                                                                      alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($currentUrl == 'admin/dashboard') { ?> active <?php } ?>">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">Dashboard </a>
            </li>
            <li class="nav-item <?php if ($currentUrl == 'admin/fieldManager') { ?> active <?php } ?>">
                <a class="nav-link" href="<?= base_url('admin/fieldManager') ?>">Field Manger</a>
            </li>
            <li class="nav-item <?php if ($currentUrl == 'admin/users') { ?> active <?php } ?>">
                <a class="nav-link" href="<?= base_url('admin/users') ?>">Users</a>
            </li>
            <li class="nav-item <?php if ($currentUrl == 'admin/country') { ?> active <?php } ?>">
                <a class="nav-link" href="<?= base_url('admin/country') ?>">Country Manager</a>
            </li>
        </ul>
        <div class="  my-2 my-lg-0">
            <a href="<?= base_url('/logout')?>">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Log out</button>
            </a>
        </div>

    </div>
</nav>
<script>
    const base_url = "<?= base_url('') ?>";
</script>