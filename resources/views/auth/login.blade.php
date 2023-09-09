<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Supplier | Login</title>
</head>
<body style="background-color: #FF8080;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card d-flex mx-3 my-3" style="background-color: #FFFEFE">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/logo2.png') }}" alt="logo" style="width: 400px" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <form action="" method="">
                            <h3 class="card-title fw-bold text-center my-3">Login</h3>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="username" class="form-label fw-semibold">
                                        Username
                                    </label>
                                    <input type="username" class="form-control" id="username" placeholder="enter username" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="form-label fw-semibold">
                                    Password
                                </label>
                                <div class="col mb-3 input-group">
                                    <input type="password" class="form-control" id="password" placeholder="enter password" aria-describedby="basic-addon" required>
                                    <span class="input-group-text" id="basic-addon" onclick="showPW()"><img src="{{ asset('assets/close-eye.png') }}" alt="..." style="width: 20px;" id="eye-icon"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn fw-semibold mt-3 mb-1" style="background-color: #bdbcbc;">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script>
        password = document.getElementById('password')
        eyeIcon = document.getElementById('eye-icon')

        function showPW() {
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.src = "{{ asset('assets/visible.png') }}"
            } else {
                password.type = "password";
                eyeIcon.src = "{{ asset('assets/close-eye.png') }}"
            }
            }
    </script>
</body>
</html>
