<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study D3 Teknlogi Informasi Vokasi UB</title>
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
</head>
<body class="bg-mybody">

    <div class="greet">
        <h1>Selamat datang di Halaman Admnistrator Tracer Study</h1>
        <h2>D3 Teknologi Informasi Vokasi UB</h2>
    </div>

    <div id="login_box">
        <h1>Silahkan Login Untuk Masuk Ke dalam halaman <b><i>Administrator<i></b> Sistem</h1>
        <div class="login_form">
            <form action="/dashboard">
                <p>
                    <input type="email" name="email" class="input email" placeholder="Email" require="true" id="">
                </p>
                <p>
                    <input type="password" name="pass" class="input password" placeholder="Password" id="">
                </p>
                <p>
                    <input type="submit" class="input submit" value="Login">
                </p>
            </form>
        </div>
    </div>
</body>
</html>