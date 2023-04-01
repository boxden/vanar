<?php

// database...
$cities = [
  'Citishlia',
  'Tiraspol',
  'Chisinau',
  'Orhei',
  'Cahul'
];
// 1) Количество
print 'Cities '  . count ( $cities ) . '<br>';
sort($cities);
// 2) Выбераемый Список
print '<select>';
for( $i=0 ; $i<count( $cities ) ; $i++ ){
  if ($cities[$i][0] == 'C' )  {
  print '<option>' . $cities[$i] . '</option>' ;
};
};
print '</select>';

  ?>
