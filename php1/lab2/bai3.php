<?php
    $list = [
        ['title' => 'See tình',
         'url' => 'https://youtu.be/gJHSDZfJrRY',
         'author' => 'Hoàng Thuỳ Linh'
        ],
        ['tittle' => 'Life goes on' ,
         'url' => 'https://youtu.be/-5q5mZbe3V8',
         'author' => 'BTS'
        ]
        ];
        print_r($list);
        echo "<br>";
        //1
       
        array_push($list,"['tittle' => 'Cupid' ,
                            'url' => 'https://youtu.be/h4y4z3q27Es',
                            'author' => 'FIFTY FIFTY'
                        ]");
        print_r($list);
        echo "<br>";

        //2
        array_unshift($list,"['tittle' => 'Way Back Home' ,
                                'url' => 'https://youtu.be/amOSaNX7KJg',
                                'author' => 'SHAUN'
                            ]");
        print_r($list);
        echo "<br>";

        //3
        array_splice($list,0,1,"['tittle' => 'Way Back Home' ,
                                'url' => 'https://youtu.be/amOSaNX7KJg',
                                'author' => 'BTS'
                            ]];");
        print_r($list);
        echo "<br>";

        //4
        unset($list[0]);
        print_r($list);
?>