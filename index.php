<?php
/** op-unit-microsoft_translate:/index.php
 *
 * @created    2024-01-06
 * @version    1.0
 * @package    op-unit-microsoft_translate
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

 /** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */

//	...
include('Microsoft_Translate.class.php');

//	...
register_shutdown_function(function(){
	//	...
	while( $error = OP()->Unit('Microsoft_Translate')->Errors() ){
		OP()->Notice($error);
	}
});
