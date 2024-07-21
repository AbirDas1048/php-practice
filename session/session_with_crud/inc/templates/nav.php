<div>
    <div class="float-left">
        <p>
            <a href="/session/session_with_crud/index.php?task=report">All Students</a>

            <?php if(hasPrivilege()): ?>
                |
                <a href="/session/session_with_crud/index.php?task=add">Add New Student</a>
            <?php endif; ?>

            <?php if(isAdmin()): ?>
                |
                <a href="/session/session_with_crud/index.php?task=seed">Seed</a>
            <?php endif; ?>
        </p>
    </div>

    <div class="float-right">
        <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){?>
            <a href="/session/session_with_crud/auth.php?logout=true">Log Out</a>
        <?php }else{?>
            <a href="/session/session_with_crud/auth.php">Login</a>
        <?php } ?>
    </div>
</div>
