<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        html {
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <header class="position-fixed w-100" style="top: 0; z-index: 101">
        <nav class="d-flex align-items-center bg-light border justify-content-between p-1">
            <h1 class="text-white bg-info p-1 m-0 rounded border border-dark">Maturitest</h1>
            <a data-toggle="collapse" aria-controls="collapseUser" aria-expanded="false" href="#collapseUser"><img style="width: 64px" src="{{  asset('/img/user-icon.svg') }}" alt="user_icon"></a>
        </nav>
        <div class="collapse" id="collapseUser">
            <div class="card card-body d-inline-block float-right" style="max-width: 248px">
                <form class="d-flex flex-column" style="gap: 20px;">
                    <label class="d-none" for="jmeno">Jmeno</label>
                    <input class="text-center" id="jmeno" type="text" placeholder="Jmeno">
                    <label class="d-none" for="heslo">Heslo</label>
                    <input class="text-center" id="heslo" type="password" placeholder="Heslo">

                    <button class="btn btn-danger" type="submit">Přihlásit</button>
                </form>
            </div>
        </div>
    </header>

    <!--
        Tento layout se bude pouzivat pro vsechny stranky se stejnout strukturou, kterym se meni akorat content v mainu.
        Abyste pouzili tento layout v novem blade.php souboru, musite ho na zacatku souboru zavolat jako je napriklad u
        view test.index
    -->

        <main class="pt-5 mt-5">
            @yield('content')
        </main>

    <footer class="text-muted mt-5 d-flex border-top flex-column border-dark justify-content-center">
        <div class="p-2 text-center">
            <p class="m-0">Kontakty ohledně problémů/poznatků stránky:</p>
            <div class="d-block justify-content-center d-md-flex" style="gap: 20px">
                <p class="m-0"><b>Designu</b>: bales@spsejecna.cz</p>
                <p class="m-0"><b>Nefunkčnosti funkcionality stránky</b>: bohac@spsejecna.cz</p>
                <p class="m-0"><b>Ostatní stížnosti</b>: ferencei@spsejecna.cz</p>
            </div>

            <small class="m-0">Tato webová stránka je školní projekt školy SPŠE Ječná.</small>
        </div>

        <p class="text-center text-muted mt-2">&copy; Filip Ferencei, Petr Boháč, Antonín Báleš, Ondřej Hána | C4a</p>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png"/></a><br/>Toto dílo podléhá licenci<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Maturitest-Neužívejte komerčně 4.0 Mezinárodní License</a>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        @yield('script')
    </script>
</body>
</html>
