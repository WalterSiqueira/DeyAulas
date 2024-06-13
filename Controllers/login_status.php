<?php
    session_start();
    $logado = isset($_SESSION['logado']) && $_SESSION['logado'] = true;
    echo $logado;

?>

<script>
    var estaLogado = <?php echo json_encode($logado); ?>
</script>