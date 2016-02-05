<?php

/* balance-apply.php */
class __TwigTemplate_f6135975ca9ba6c257ddee895a6ff565e8827d7cb50bd67f44c8754420053805 extends Twig_Template
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
        echo "<h1>Apply for your balance</h1>

";
        // line 3
        if ((null === $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "balance_id", array()))) {
            // line 4
            echo "
  <p>Your character <strong>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
            echo "</strong> current does not have a balance.</p>
  <p>You may submit a value you would like to request, and a reasoning behind the value below.
  The value itself will be relative to other members of the community, so it is less important than your reasoning.</p>

  <p><input type=\"text\" name=\"balance_request\" /></p>
  <p><textarea name=\"reason\" rows=\"10\" cols=\"100\"></textarea></p>

";
        }
        // line 13
        echo "
";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "balance_id", array()))) {
            // line 15
            echo "  <p>Your character <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
            echo "</strong> already has balance, you cannot re-apply once you have received your allocation.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "balance-apply.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  42 => 14,  39 => 13,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Apply for your balance</h1>*/
/* */
/* {% if character.balance_id is null %}*/
/* */
/*   <p>Your character <strong>{{ character.name }}</strong> current does not have a balance.</p>*/
/*   <p>You may submit a value you would like to request, and a reasoning behind the value below.*/
/*   The value itself will be relative to other members of the community, so it is less important than your reasoning.</p>*/
/* */
/*   <p><input type="text" name="balance_request" /></p>*/
/*   <p><textarea name="reason" rows="10" cols="100"></textarea></p>*/
/* */
/* {% endif %}*/
/* */
/* {% if not character.balance_id is null %}*/
/*   <p>Your character <strong>{{ character.name }}</strong> already has balance, you cannot re-apply once you have received your allocation.</p>*/
/* {% endif %}*/
/* */
