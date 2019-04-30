<?php
$gerimai = [
    [
        'name' => 'Vlkmaerges Alus',
        'kaina' => 4.50,
        'nuolaida' => 0 //%  
    ],
    [
        'name' => 'Stumbro Degtine',
        'kaina' => 8.50,
        'nuolaida' => 10//%
    ],
    [
        'name' => 'Tuborg',
        'kaina' => 3.10,
        'nuolaida' => 25//%
    ],
    [
        'name' => 'Duff',
        'kaina' => 1.50,
        'nuolaida' => 0//%
    ]
];
        
        
foreach ($gerimai as $index => $value) {
    if ($value['nuolaida'] >0){
        $gerimai[$index]['css_class']= 'nuolaida1';
    }else{
        $gerimai[$index]['css_class']= 'nenuolaida1';
    }
}
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>D</title>
        <style>
            .nuolaida1 {
                font-size: 25px;
            } 
            .nenuolaida1 {
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach ($gerimai as $value): ?>
            <li class="<?php print $value['css_class']; ?>">
                <span><?php print $value['name']; ?></span>
                <span><?php print $value['nuolaida']; ?></span>
            </li>
            <?php endforeach;?>
        </ul>
    </body>
</html>
