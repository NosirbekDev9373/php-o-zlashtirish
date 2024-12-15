 <?php  

// Switch

 $rang = 'yashil';

 switch ($rang) {
 	case 'qizil':
 	case 'sariq':
 	    echo 'rang sariqga teng';
 	    break;
    case 'kuk':
    case 'oq':
         echo 'kuk rang chiqar';
         break;
 	case 'yashil':
 	    echo 'yashil ga teng busa chiq';
 	    break;
 	default:     
 	    echo 'bu rang bizda yo\'q';	
 }

 if($rang == 'yashil'){
 	echo ' rang yashilga teng';
 } elseif ($rang == 'qizil') {
 	echo 'rang qizilga teng';
 } else {
 	echo 'bu rang bizda yoq';
 }







 ?>
