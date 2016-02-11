<?php

/* admin-panel.php */
class __TwigTemplate_c8d4e0be58299c9438efa6be9f79a66b7c0bf7094891947c94bbf2ff506b0aca extends Twig_Template
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
        echo "<h1>Administrator Panel</h1>

<p>Controls:</p>
<ul>
  <li><a href=\"/admin/pending-requests\">View Pending Balance Requests.</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "admin-panel.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <h1>Administrator Panel</h1>*/
/* */
/* <p>Controls:</p>*/
/* <ul>*/
/*   <li><a href="/admin/pending-requests">View Pending Balance Requests.</a></li>*/
/* </ul>*/
/* */
