<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/landing.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <main class="form-signup w-100 m-auto">
        <div class="d-flex flex-column align-items-center">
            <img class="mb-2" src="img/login.svg" alt="" width="80" height="100">
        </div>
        <h1 class="h3 mb-3 fw-normal text-white">Please sign up</h1>
        <form action="/register" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="name"
                    class="form-control rounded-top @error('name') is-invalid
                @enderror" id="name"
                    placeholder="Name" required>
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-floating">
                    <input type="email" name="email"
                        class="form-control @error('email') is-invalid
                @enderror" id="email"
                        placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username"
                        class="form-control @error('username') is-invalid
                @enderror" id="username"
                        placeholder="Username" required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password') is-invalid
                @enderror"
                        id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign up</button>
        </form>
        <small class="text-white ">Already have account? <a href="/">Login</a></small>
    </main>
</body>

</html>
