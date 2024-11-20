<header class="d-flex justify-content-between align-items-center p-3 bg-white border-bottom w-100" style="position: fixed; top: 0; left: 0; z-index: 1030;">
    <div class="fw-bold text-dark ms-3">
        <?php  
        echo "Usuario: ". $_SESSION['username'] ." ". $_SESSION['apellido'] ;
        ?>
    </div>
    <div class="me-3">
        <?php 
        if (isset($_SESSION['foto'])) { ?>
            <img src="<?php echo ($_SESSION['foto']); ?>" 
                 alt="Foto de perfil" 
                 class="rounded-circle" 
                 style="width: 40px; height: 40px; object-fit: cover;">
        <?php } else { ?>
            <img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" 
                 alt="Foto por defecto" 
                 class="rounded-circle" 
                 style="width: 40px; height: 40px; object-fit: cover;">
        <?php } ?>
    </div>
</header>