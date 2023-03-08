<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form action="procesa_registro.php" method="POST">
	    <!-- Section: Design Block -->
        <section class="text-center">
          <!-- Background image -->
          <div class="p-5 bg-image" style="
                background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
                height: 300px;
                "></div>
          <!-- Background image -->
        
          <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                margin-top: -100px;
                background: hsla(0, 0%, 100%, 0.8);
                backdrop-filter: blur(30px);
                ">
            <div class="card-body py-5 px-md-5">
        
              <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                  <h2 class="fw-bold mb-5">Registrarse ahora</h2>
                  <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1" name="nombre" class="form-control" />
                          <label class="form-label" for="form3Example1">Nombre</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example2" name="apellido" class="form-control" />
                          <label class="form-label" for="form3Example2">Apellido</label>
                        </div>
                      </div>
                    </div>
        
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" name="email" class="form-control" />
                      <label class="form-label" for="form3Example3">Correo</label>
                    </div>
        
                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                      <input type="text" name="tel" class="form-control" />
                      <label class="form-label" for="form3Example4">Teléfono</label>
                    </div>
                    
                    <!-- User input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example5" name="usuario" class="form-control" />
                      <label class="form-label" for="form3Example5">Usuario</label>
                    </div>
                    
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example6" name="clave" class="form-control" />
                      <label class="form-label" for="form3Example6">Contraseña</label>
                    </div>
        
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                      <label class="form-check-label" for="form2Example33">
                        Subscribirse a nuestro newsletter
                      </label>
                    </div>
        
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                      Registrar
                    </button>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: Design Block -->
		
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
