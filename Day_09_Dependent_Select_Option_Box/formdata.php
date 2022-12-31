<?php 
$val        = $_GET['selectvalue']; 
$framWork1  = array('Laravel', 'Codignator', 'Symphony', 'CakePHP');
$framWork2  = array('VueJs', 'React', 'Angular', 'NuxtJs');
$framWork3  = array('Django', 'CubiWeb', 'TurboGears', 'Pyramid');

switch($val){
    case 'PHP' : foreach($framWork1 as $phpValue)
    {
        echo  " <option> $phpValue  </option>";
    }
    break;
    case 'JavaScript' : foreach($framWork2 as $phpValue)
    {
        echo  " <option> $phpValue  </option>";
    }
    break;
    case 'Python' : foreach($framWork3 as $phpValue)
    {
        echo  " <option> $phpValue  </option>";
    }
    break;
    
    defult: "No Data Select";
    break;
}












?>