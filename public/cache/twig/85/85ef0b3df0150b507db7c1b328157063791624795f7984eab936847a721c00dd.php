<?php

/* transaction.php */
class __TwigTemplate_8eb242d4cf8fcb5453c179e7dc8391c32f0bf5ba4cb99d8d09d4e71186398e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Transaction Page</h1>

<p>
  <a href=\"/transaction/create\">Make a new transaction</a>
</p>

<p>
  <a href=\"/transaction/previous\">View Previous Transactions</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "transaction.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <h1>Transaction Page</h1>*/
/* */
/* <p>*/
/*   <a href="/transaction/create">Make a new transaction</a>*/
/* </p>*/
/* */
/* <p>*/
/*   <a href="/transaction/previous">View Previous Transactions</a>*/
/* </p>*/
/* */
