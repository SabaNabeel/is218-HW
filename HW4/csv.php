<?php 
$title = 'Practise array';
$tmps = array
(
    'Number 1' => Array
    (
      '1' => 
        Array('circ' => Array
        (
            'Unit1' => Array(),
            
            
        ),
        'type' => Array
        (
            'Unit1' => Array('2' => 'file.zip'),
            
        )
    ),

    '2' => Array
    (
        'circ' => Array
        (
            'Unit1' => Array(),
            
        ),
        'type' => Array
        (
            'Unit1' => Array(),
            
        ),
    ),
),
);

// BEWARE - DO NOT HAVE ANYTHING AFTER TMP;, NOT EVEN A SPACE
echo $html = <<< TMP
<!DOCTYPE html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en"/>
<style type="text/css">
  table    {margin:-1em 0 2em 4.2em;}
  table td,
  table th {padding:0 1em; border:solid 1px #333; text-align:center;}
</style>
<title> $title </title>
</head>
<body>
TMP;
// BEWARE - DO NOT HAVE ANYTHING AFTER TMP;, NOT EVEN A SPACE

echo '<h1>' .$title .'</h1>';
// BEWARE - DO NOT HAVE ANYTHING AFTER TMP, NOT EVEN A SPACE
echo $table = <<< TMP
    <table>
        <tr>
        <th> Number      </th>
        <th> content         </th>
        <th> item             </th>
        <th> file             </th>
    </tr>
TMP;
// BEWARE - DO NOT HAVE ANYTHING AFTER TMP;, NOT EVEN A SPACE

foreach($tmps as $item1 => $name1):
    foreach($name1 as $item2 => $name2):
        foreach($name2 as $item3 => $name3):
            foreach($name2 as $item4 => $name4):
                foreach($name4 as $item5 => $name5):
                    foreach($name5 as $item6 => $name6):
                        echo '<tr>';
                            echo '<td>' .$item1 .'</td>'; // english
                            echo '<td>' .$item2 .'</td>'; // term1, 
                            echo '<td>' .$item2 .'</td>'; // term1, 
                          echo '<td>' .$item5 .'</td>'; // unit1
                      echo '</tr>';
                    endforeach;        
                endforeach;        
            endforeach;        
        endforeach;        
    endforeach;        
endforeach;

echo '</table></body></html>';
