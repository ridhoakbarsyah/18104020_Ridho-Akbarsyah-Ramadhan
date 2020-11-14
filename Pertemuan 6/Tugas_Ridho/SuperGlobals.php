 <?php

/**membuat variabel x dan y dengan nilai 75 dan 25 */
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; /**membuat funcion addition globals z dari globals x + globals y */


}
 
addition();
echo $z; /** dengan hasil addtion z */
?> 