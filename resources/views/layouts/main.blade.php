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
            <h1 class="text-white bg-info p-1 m-0 rounded border border-dark"><a href="{{ route("questions.main") }}">Maturitest</a></h1>
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

        <a href="{{route('question.pristupnost')}}" class="text-center text-muted mt-2">Prohlášení o přístupnosti</a>
        <p class="text-center text-muted mt-2">&copy; PD | Filip Ferencei, Petr Boháč, Antonín Báleš, Ondřej Hána | C4a</p>
    </footer>


    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function (){
           $('#test_form').submit(function (e){
              e.preventDefault();
              $.ajax({
                 type: "POST",
                 url: "{{route('check-answers', ['question_id' => $question->question_id])}}",
                  data: $('#test_form').serialize(),
                  success: function (response){
                     const sum = response.split(',')
                      $('#goodAnswers').html("Počet správných odpovědí:" + sum[0])
                      $('#badAnswers').html("Počet špatných odpovědí:" + (sum[1] - sum[0]))
                  },
                  error: function (error){
                      $('#goodAnswers').html("Něco se pokazilo, omlouváme se za potíže.")
                     console.log(error)
                  },
              });
           });
        });
    </script>
</body>
</html>
