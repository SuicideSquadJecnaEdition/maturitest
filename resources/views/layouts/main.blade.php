<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <!--
        Tento layout se bude pouzivat pro vsechny stranky se stejnout strukturou, kterym se meni akorat content v mainu.
        Abyste pouzili tento layout v novem blade.php souboru, musite ho na zacatku souboru zavolat jako je napriklad u
        view test.index
    -->

        <main>
            @yield('content')
        </main>

    <footer>

    </footer>

    <script>
        @yield('script')
    </script>
</body>
</html>
