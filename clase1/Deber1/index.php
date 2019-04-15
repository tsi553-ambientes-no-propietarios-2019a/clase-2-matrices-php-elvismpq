<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$tabla=array(
	'NombresCol'=>array('Nombre','Apellido','Edad'),
    'ind1'=> array('Carlos','Granda','32'),
    'Apellido'=>array('Juan ','Martinez','31'),
    'Edad'=>array('Maria','Jimenez','22')
);
    echo '<table class="table table-dark">';
    foreach ($tabla as $value){
        echo '<tr>';
        foreach ($value as $value1){
            echo '<td>';
            print_r($value1);
            echo '</td>';
        }
        echo'</tr>';
    }
    echo '</table>';


?>