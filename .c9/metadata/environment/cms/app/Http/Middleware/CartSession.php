{"filter":false,"title":"CartSession.php","tooltip":"/cms/app/Http/Middleware/CartSession.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":4,"column":12},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":15},"action":"insert","lines":["use Illuminate\\Support\\Facades\\Session;","  use App\\Cart;"],"id":3}],[{"start":{"row":19,"column":31},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]},{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":21,"column":8},"end":{"row":24,"column":10},"action":"insert","lines":[" if (!Session::has('cart')) {","             $cart = Cart::create();","             Session::put('cart', $cart->id);","         }"],"id":5}],[{"start":{"row":19,"column":8},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]},{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":19,"column":8},"end":{"row":22,"column":10},"action":"insert","lines":[" if (!Session::has('cart')) {","             $cart = Cart::create();","             Session::put('cart', $cart->id);","         }"],"id":7}],[{"start":{"row":26,"column":8},"end":{"row":29,"column":10},"action":"remove","lines":[" if (!Session::has('cart')) {","             $cart = Cart::create();","             Session::put('cart', $cart->id);","         }"],"id":8}],[{"start":{"row":5,"column":39},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":9},{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":[" "]},{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":[" "]}],[{"start":{"row":5,"column":39},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":10}]]},"ace":{"folds":[],"scrolltop":186,"scrollleft":0,"selection":{"start":{"row":8,"column":17},"end":{"row":8,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1632489675650,"hash":"e1309aff93e47695ee37f56a7896cd7dfcf69fa5"}