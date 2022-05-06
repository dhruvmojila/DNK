<?php

session_start();
session_destroy();

// header("location: account.php");
?>
<script>
    alert('you are logged out');
    window.history.go(-1);</script>';
</script>
<?php
?>