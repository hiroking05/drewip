{"filter":false,"title":"create.blade.php","tooltip":"/message-board/resources/views/messages/create.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":1}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":[">"],"id":2},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["-"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["-"]},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":[" "]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["く"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["書"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["を"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["ツ"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["ン"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["テ"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["ン"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["コ"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["の"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["毎"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["ジ"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["ペ"]},{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["に"]}],[{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["こ"],"id":3},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["こ"]},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":[" "]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"remove","lines":["-"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"remove","lines":["-"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["!"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["<"]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":4,"column":4},"end":{"row":19,"column":10},"action":"insert","lines":["<h1>メッセージ新規作成ページ</h1>","","    <div class=\"row\">","        <div class=\"col-6\">","            {!! Form::model($message, ['route' => 'messages.store']) !!}","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":10},"end":{"row":19,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572259298411,"hash":"e6e27a204e83b92269cb08ce086cecd688ed077f"}