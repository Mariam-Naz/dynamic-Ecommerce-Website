<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Admin</a>
    <a class="navbar-brand" href="../index.php">Home</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['username']; ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
            
            <li class="divider"></li>
            <li>
                <form style="text-align: center;" method="POST">
                    <?php reg_logout(); ?>
                <button style="display: inline-block;" name="reg_logout" class="btn btn-info"><i class="fa fa-fw fa-power-off"></i> Log Out</button>
                </form>
            </li>
        </ul>
    </li>
</ul>