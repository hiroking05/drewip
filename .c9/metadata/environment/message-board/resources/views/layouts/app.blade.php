{"filter":false,"title":"app.blade.php","tooltip":"/message-board/resources/views/layouts/app.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>MessageBoard</title>","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">","        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">","    </head>","","    <body>","        <header class=\"mb-4\">","            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">","                <a class=\"navbar-brand\" href=\"/\">MessageBoard</a>","                ","                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#nav-bar\">","                    <span class=\"navbar-toggler-icon\"></span>","                </button>","                ","                <div class=\"collapse navbar-collapse\" id=\"nav-bar\">","                    <ul class=\"navbar-nav mr-auto\"></ul>","                    <ul class=\"navbar-nav\">","                    </ul>","                </div>","            </nav>","        </header>","        ","        <div class=\"container\">","            @yield('content')","        </div>","        ","        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>","        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\"></script>","        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\"></script>","        <script defer src=\"https://use.fontawesome.com/releases/v5.7.2/js/all.js\"></script>","    </body>","</html>"],"id":1}],[{"start":{"row":20,"column":43},"end":{"row":21,"column":24},"action":"insert","lines":["","                        "],"id":2}],[{"start":{"row":21,"column":24},"end":{"row":21,"column":133},"action":"insert","lines":["<li class=\"nav-item\">{!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'nav-link']) !!}</li>"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":0},"end":{"row":21,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572259098174,"hash":"ceaf19b4c6a70ff4f04c3e25e452ba17983bf295"}