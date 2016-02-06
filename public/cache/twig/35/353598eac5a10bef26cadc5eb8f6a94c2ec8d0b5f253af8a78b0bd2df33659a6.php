<?php

/* balance-pending-view.php */
class __TwigTemplate_ad3d3b9ce4a8956bb86a88357a505685f5dacba7822f9ef1b5d211669485ee7a extends Twig_Template
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
        echo "<h1>Balance Pending for: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "</h1>

<h3>Value Requested:</h3>
<p>
  ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "amount", array()), "html", null, true);
        echo "
</p>

<h3>Reasoning Given:</h3>
<p>
  ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "reason", array()), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "balance-pending-view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  27 => 5,  19 => 1,);
    }
}
/* <h1>Balance Pending for: {{ character.name }}</h1>*/
/* */
/* <h3>Value Requested:</h3>*/
/* <p>*/
/*   {{ balance_request.amount }}*/
/* </p>*/
/* */
/* <h3>Reasoning Given:</h3>*/
/* <p>*/
/*   {{ balance_request.reason }}*/
/* </p>*/
/* */
