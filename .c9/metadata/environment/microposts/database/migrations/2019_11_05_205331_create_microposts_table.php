{"filter":false,"title":"2019_11_05_205331_create_microposts_table.php","tooltip":"/microposts/database/migrations/2019_11_05_205331_create_microposts_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":15,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });"],"id":2}],[{"start":{"row":15,"column":8},"end":{"row":23,"column":11},"action":"insert","lines":["Schema::create('microposts', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","","            // 外部キー制約","            $table->foreign('user_id')->references('id')->on('users');","        });"],"id":3}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"remove","lines":["約"],"id":4},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"remove","lines":["制"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["キ"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"remove","lines":["部"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["外"]},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"remove","lines":[" "]},{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"remove","lines":["/"]},{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"remove","lines":["/"]},{"start":{"row":21,"column":8},"end":{"row":21,"column":12},"action":"remove","lines":["    "]},{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "],"id":5},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":145.5,"scrollleft":0,"selection":{"start":{"row":20,"column":0},"end":{"row":20,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1572954868032,"hash":"f8710b313d5470a7c10fad732e5d5eb254a49cbb"}