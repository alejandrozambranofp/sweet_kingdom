<div class="container my-5" style="max-width: 400px;">
    <h2 class="text-center mb-4">Iniciar Sesión</h2>
    
    <?php if (isset($_SESSION['error_login'])): ?>
        <div class="alert alert-danger text-center">
            <?php 
            echo htmlspecialchars($_SESSION['error_login']);
            unset($_SESSION['error_login']); 
            ?>
        </div>
    <?php endif; ?>

    <form action="/paginaWeb_projecte_ZambranoAlejandro/index.php?controlador=Auth&accion=login" method="POST">
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Acceder</button>
    </form>

    <div class="text-center mt-3">
        <a href="/paginaWeb_projecte_ZambranoAlejandro/index.php?controlador=Auth&accion=mostrarRegistro">¿No tienes cuenta? Regístrate</a>
    </div>
</div>