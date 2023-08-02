<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">


                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Sign Up</h3>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="typeEmailX-2">Name</label>

                          <input type="text" name="name" id="typeEmailX-2" class="form-control form-control-lg" />
                        </div>


                        <div class="form-outline mb-4">
                          <label class="form-label" for="typeEmailX-2">Email</label>

                          <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="typePasswordX-2">Password</label>

                          <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="typePasswordX-2">Password Confirmation</label>

                          <input type="password" name="password_confirmation" id="typePasswordX-2" class="form-control form-control-lg" />
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>


                      </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
