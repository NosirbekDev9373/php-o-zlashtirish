 <?php  

// Loops

/*
While
do..while
for
foreach
*/
/*
for ( init counter; test counter; increment counter){
	code to be executed for each iteration;
}
*/

/*
for($x = 1; $x <= 10; $x++){ //bu Loops turiga kiradi
	echo $x . '<br>';
}
*/

// while ga misol

/*
$x = 1;

while ($x <= 5) {
	echo $x . '<br>';
	$x++;
}

*/

// foreach ga misol

$royhat = ['yashil', 'qizil', 'sariq'];
$yosh = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"40");
/* foreach ($arry as #value) {
	code to be executed;
}
*/

foreach($yosh as $odam => $yoshi){
   echo $odam . ' - ' . $yoshi . '<br>';
}



// bunda bizga 4 qoldirirb ket deb ayty

/*
for($x = 1; $x <= 5; $x++) {
    if($x == 4){
    	continue;
    }
    echo $x . '<br>';
}
*/
 ?>
