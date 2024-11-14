!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://i.pinimg.com/originals/98/34/66/983466ddf30a88bf189b1efa13c335f7.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Bienvenido!</h2>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivel de Dificultad:</label>
                <select name="dificultad" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivel</option>
                    <option value="facil">Facil</option>
                    <option value="mig">Medio</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comienza el juego</button>
        </form>
    </div>
</body>
</html>
