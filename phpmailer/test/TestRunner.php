<?php
class TestRunner
{
    /* Run a suite of tests and report results. */
    public function run($suite)
    {
        $result = new TextTestResult;
        $suite->run($result);
        $result->report();
    }
}
<<<<<<< HEAD
=======
?>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
