<html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Pozos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="app.js"></script>
    
        </head>
    
    
        <body class="d-flex flex-column h-100" align="center">
    
            <div id = "container">
        
        
                <div id ="cuerpo">

                <h1 class="text-center text-uppercase">Mediciones del pozo: </h1>

                <button class="btn btn-outline-success btn-agregar" id="btn-agregar-medicion">Agregar nueva medicion</button>

                <button class="btn btn-outline-primary btn-agregar" id="btn-grafica">Ver en gráfica</button>
                
                <div class="container zona-mediciones mt-4">
                    <table class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <td>Fecha</td>
                                <td>Hora</td>
                                <td>Medicion</td>
                            </tr>
                        </thead>

                        <tbody id="mediciones">
                        
                        </tbody>
                    </table>
                </div>
            </div>
            
            <form id=formMedidas>
            <input type="hidden" name="idPozo" id="idPozo" value="<?php echo $id?>">
                <div class="mb-3">
                    <label for="hora" class="form-label">Hora de la Medición: </label>
                    <input type="time" class="form-control" id="hora" name="hora" required>
                    <
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha de la Medición: </label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="mb-3">
                    <label for="medida" class="form-label">Medición tomada: </label>
                    <input type="number" class="form-control" id="medida" name="medida"" required>
                </div>
                
                <button type="submit" class="btn btn-outline-success" id="agregarMedicion" value="agregar">Submit</button>
            </form>
            
            </div>
        
                    <br><br>
        
                <div id = "pie" align="center"> 
                @Todos los derechos reservados. <br/> Maracaibo Venezuela
                </div>
        
        
            </div>
    
    
    
        </body>
    
    </html>
    