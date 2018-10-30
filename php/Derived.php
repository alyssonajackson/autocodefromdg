<?php
require_once 'Base.php';
require_once 'PureAbstract.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Derived extends Base implements PureAbstract {
    // Attributes
    // Associations
    // Operations
    /**
     * XXX
     * 
     * @param  int $a XXX
     * @return int XXX
     * @access public
     */
    public function foo($a = 0)
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @return int XXX
     * @access public
     * @static      */
    public static function newfoo()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @return int XXX
     * @access public
     */
    public function otherfoo()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @param  int $x XXX
     * @param  int $y XXX
     * @return int XXX
     * @access protected
     */
    protected function bar($x = 0, $y = 0)
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
