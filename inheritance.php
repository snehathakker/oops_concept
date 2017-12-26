<?php
/**
 * Class mscit.
 *
 * @package    Example
 * @subpackage Test
 * @author     sneha <sneha@example.com>
 */

/**
 * Class Mscit
 */
class Mscit
{
    private $_subject;

    /**
     * Setter function.
     *
     * @param mixed $subject Subject to store in private var.
     */
    public function setsubject($subject)
    {
        $this->_subject = $subject;
    }

    /**
     * Returns display string.
     *
     * @return string
     *   Returns formatted string.
     */
    public function display()
    {
        return "This subject:" . $this->_subject;
    }
}

/**
 * Class result
 */
class Result extends Mscit
{
}

$r = new Result();
$r->setsubject('ionic');
echo $r->display();