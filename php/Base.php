<?php

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 * @abstract
 */
abstract class Base {
    // Attributes
    /**
     * XXX
     *
     * @var    int
     * @access public
     * @static     */
    public static $dummy;

    /**
     * XXX
     *
     * @var    int
     * @access private
     */
    private $x = 0;

    // Associations
    // Operations
    /**
     * XXX
     * 
     * @param  int $a XXX
     * @return int XXX
     * @access public
     * @abstract
     */
    abstract public function foo($a = 0);

    /**
     * XXX
     * 
     * @param  int $x XXX
     * @param  int $y XXX
     * @return int XXX
     * @access protected
     * @abstract
     */
    abstract protected function bar($x = 0, $y = 0);

}

?>
