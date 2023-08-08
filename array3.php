<?php
$ar3 = [
    ['nome'=>'Julia',
     'email'=>'julia@gmail.com',
     'senha'=> '123456'
    ],
    ['nome'=>'Maria',
    'email'=>'maria@gmail.com',
    'senha'=> '789456'
   ], 
   ['nome'=>'Fernando',
     'email'=>'fernando@gmail.com',
     'senha'=> '457899'
    ]
];
#echo var_dump($ar3);
echo "<br>";
/*
echo $ar3[0]['nome'];
echo "<br>";
echo $ar3[0]['email'];
*/
$qtd = count($ar3);

for($i=0; $i<$qtd;$i++){
    echo "<h3>Item - $i</h3>";
    for($x=1;$x<$qtd-1;$x++){
        echo $ar3[$i]["nome"]."<br>";
        echo $ar3[$i]["email"]."<br>";
        echo $ar3[$i]["senha"]."<br>";
    }
}


?>