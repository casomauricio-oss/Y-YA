<div class="content">
    <div class="title-info">
        <h5>Registra un nuevo usuario en YÁYA</h5>
    </div>
    <!-- usuario -->
    <div class="form-register">
        <form method="POST" action="/security/validacionRgistroUsuario.php">
            <!-- Información del usuario -->
            <div class="infoUser">
                <label for="nombreUsuario">Nombre de usuario:</label>
                <input name="nombreUsuario" type="text" value="" placeholder="Ingresar Nombre" required>
                <label for="apellido">Apellidos:</label>
                <input name="apellido" type="text" value="" placeholder="Ingresar Apellidos" required>
                <label for="numeroCedula">Número de Cédula:</label>
                <input name="numeroCedula" type="text" value="" placeholder="Ingrese numero de Cedula" required>
                <label for="FechaNacimiento">Fecha de Nacimiento:</label>
                <input name="FechaNacimiento" type="date" value="" placeholder="Ingrese fecha de nacimiento" required>
            </div>
            <!-- Información adicional del usuario -->
            <div class="infoUserSec">
                <input name="fechaRegistro" type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>">

                <!-- rol -->
                <label for="rol">Rol:</label>
                <input name="rol" type="text" value="" placeholder="seleccione rol" required>

                <!-- credenciales -->
                <label for="email">Email:</label>
                <input name="email" type="email" value="" placeholder="ingrese email" required>
                <label for="contraseña">Contraseña:</label>
                <input name="contraseña" type="password" value="" placeholder="ingrese Contraseña" required>

                <!-- contactos-->
                <label for="telefono">Teléfono:</label>

                <input name="telefono" type="text" value="" placeholder=" numero de telefono" required>
                <label for="email_contacto">Email de contacto:</label>
                <input name="email_contacto" type="email" value="" placeholder="ingrese email de contacto" required>

                <!-- Direcion -->
                <label for="direccion">Dirección:</label>
                <input name="direccion" type="text" value="" placeholder="ingrese direccion" required>
                <div class="contentButton">
                    <input name="Guardar" type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </div>
</div>