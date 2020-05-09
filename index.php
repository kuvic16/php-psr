<?php


/**
 * PHP Standards Recommendations
 */

 /**
  * Single quote, Double quote
  * ------------------------------
  * Use single quote in string if you don't concat with another string.
  * when PHP finds double quote it assumes there could be a variable
  * to concate.
  */
 $var1 = 'This is just a string';
 $var2 = "Concat the string $var1";

 
 /**
  * Indentation
  * -----------------------------
  * Make proper indent in multiple variables or array object.
  * In vscode, there is plugin named alignment which is very useful to make variable indentation perfect
  * Alt +=
  */
 $foo_value = 'somevalue';
 $foo2_var  = 'somevalue2';
 $foo34     = 'somevalue3';
 $foos      = 'somevalue4';

 $args = array(
     'post_type'   => 'page',
     'post_author' => 123,
     'post_status' => 'publish'
 );

 /**
  * Switch
  * -----------------------------
  * Make switch more readable by adding proper indent on case, break
  */
  switch ($type){
      case 'foo':
        some_functions();
        break;

      case 'bar':
        another_function();
        break;
  }

  /**
   * brace style
   * In PSR: class brace should be in new line
   * In wordpress: class, method brace should be in same line of declartion
   */

   class Person
   {
       public function __construct()
       {

       }

       function age()
       {

       }
   }

/**
* Use elseif instead of else if
*/
if($condition)
{

}elseif($another_condition)
{

}else
{

}

/**
 * Don't use PHP short hand
 * Use normal
 */

 # Don't use
<? ... ?>
<?= $var ?>

#use instead following
<?php ... ?>
<?php echo $var; ?>

/**
 * Trimming space
 * Don't keep unwanted space after any code
 */

 $var = "this is something";

 /**
  * Make one space during code
  */

  foreach ( $foo as $bar ) {

  }

  function my_function( $param1 = 'foo' )
  {
        if ( ! $foo ) {

        }
  }

  $x = $foo['bar'];   // correct
  $x = $foo[ 'bar' ]; // Incorrect

  $x = $foo[0];       // correct
  $x = $foo[ 0 ];     // Incorrect

  $x = $foo[ $bar ];  // correct
  $x = $foo[$bar];    // Incorrect

  switch ( $foo ) {
      case 'bar': // correct
      case 'ba' : // Incorrect  
  }


  /**
   * Spacing between each function: one space
   */

   function functionA {

   }

   function functionB {

   }

   function functionC {

   }

   /**
    * Snake case naming convention
    */

    function some_name ( $some_variable ) {

    }

    class Walker_Category extends Walker {

    }

    class WP_HTTP {

    }

    define( 'DOING_AJAX', true );

    /**
     * CSS: multiple class should be new line
     */

     .classA,
     .classB,
     .classC {

     }

     #common-form {
        background: #fff;
     }