<?php
class TestFailure
{
  /* Record failure of a single TestCase, associating it with the
     exception(s) that occurred */
    var $fFailedTestName;
    var $fExceptions;

    function TestFailure(&$test, &$exceptions)
    {
        $this->fFailedTestName = $test->name();
        $this->fExceptions = $exceptions;
    }

    function getExceptions()
    {
        return $this->fExceptions;
    }
    function getTestName()
    {
        return $this->fFailedTestName;
    }
}
