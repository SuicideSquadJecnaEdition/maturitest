<!doctype html>
<html lang=cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body class="d-flex justify-content-center align-items-center">
<h1 class="mt-5 pt-5 pb-2 text-center">ADMIN</h1>

<div class="card card-body" style="max-width: 248px">
    <form class="d-flex flex-column" style="gap: 20px;">
        <label class="d-none" for="jmeno">Jmeno</label>
        <input class="text-center" id="jmeno" type="text" placeholder="Jmeno">
        <label class="d-none" for="heslo">Heslo</label>
        <input class="text-center" id="heslo" type="password" placeholder="Heslo">

        <button class="btn btn-danger" type="submit">Přihlásit</button>
    </form>
</div>
</body>
</html>
