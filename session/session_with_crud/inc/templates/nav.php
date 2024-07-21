<div>
    <div class="float-left">
        <p>
            <a href="/session/session_with_crud/index.php?task=report">All Students</a> |
            <a href="/session/session_with_crud/index.php?task=add">Add New Student</a> |
            <a href="/session/session_with_crud/index.php?task=seed">Seed</a>
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
