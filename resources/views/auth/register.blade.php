<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins',sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-image: url("images/orange.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

section {
    position: relative;
    max-width: 400px;
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 20px;
    backdrop-filter: blur(55px);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 5rem;
}

h1 {
    font-size: 2rem;
    color: #fff;
    text-align: center;
}

.inputbox {
    position: relative;
    margin: 30px 0;
    max-width: 310px;
    border-bottom: 2px solid #fff;
}

.inputbox label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1rem;
    pointer-events: none;
    transition: all 0.5s ease-in-out;
}

input:focus ~ label,
input:valid ~ label {
    top: -5px;
}

.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1rem;
    padding: 0 35px 0 5px;
    color: #fff;
}

.inputbox ion-icon {
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2rem;
    top: 20px;
}

.forget {
    margin: 35px 0;
    font-size: 0.85rem;
    color: #fff;
    display: flex;
    justify-content: space-between;

}

.forget label {
    display: flex;
    align-items: center;
}

.forget label input {
    margin-right: 3px;
}

.forget a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.forget a:hover {
    text-decoration: underline;
}

button {
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background-color: rgb(255, 255,255, 1);
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: all 0.4s ease;
}

button:hover {
  background-color: rgb(255, 255,255, 0.5);
}

.register {
    font-size: 0.9rem;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}

.register p a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}

.register p a:hover {
    text-decoration: underline;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom styles for this template-->
    <link href="{{ asset('auth/register.css') }}" rel="stylesheet">
    {{-- Toastr CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <title>Register</title>
</head>
<body>
    <section>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <h1>Register</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="name" name="name" id="name" >
                <label for="">Name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" id="email" >
                <label for="">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" id="password" >
                <label for="">Password</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="password" name="password_confirmation" id="password_confirmation" >
                <label for="">Comfirm Your password</label>
            </div>
            {{-- <div class="forget">
                <label for=""><input type="checkbox">Remember Me</label>
                <a href="#">Forget Password</a>
            </div> --}}
            <button>Register</button>
            <div class="register">
                <p style="color:black;">Have an account? <a href="{{ url('login') }}"><h5>Login Here</h5></a></p>
            </div>
        </form>
    </section>

    {{-- Toastr JS --}}
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>

        @if(Session::has('success'))
            Toastify({ text: "{{ Session::get('success') }}", duration: 10000,
                style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
            }).showToast();

        @elseif (Session::has('fail'))
            Toastify({ text: "{{ Session::get('fail') }}", duration: 10000,
                    style: { background: "linear-gradient(to right, #b90000, #c99396)" }
            }).showToast();
        @endif

        @if(Session::has('error'))
            Toastify({ text: "{{ Session::get('error') }}", duration: 10000,
                style: { background: "linear-gradient(to right, #b90000, #c99396)" }
            }).showToast();
        @endif

        @if($errors->any())
            @foreach ($errors->all() as $error)
                Toastify({ text: "{{ $error }}", duration: 10000,
                    style: { background: "linear-gradient(to right, #b90000, #c99396)" }
                }).showToast();
            @endforeach
        @endif

    </script>

</body>
</html>
