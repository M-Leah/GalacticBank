<?php

/* admin-balance-request-review.php */
class __TwigTemplate_e72e7e643af0181a399dfdbbc62633968e8ba1611e32bb044df70001f87b6f62 extends Twig_Template
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
        echo "<h1>Balance Request #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "id", array()), "html", null, true);
        echo "</h1>

";
        // line 3
        if ( !array_key_exists("error", $context)) {
            // line 4
            echo "
  <p>You are reviewing a balance request for the character <strong>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "name", array()), "html", null, true);
            echo "</strong>
  you should remember to be impartial and assess the claims to the best of your ability. If you
  are unsure on whether a claim is factual or not, you should seek out aid from the community
  rather than performing guess work. Your request reviews are logged.</p>

  <h3>Requested Amount</h3>
  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "amount", array()), "html", null, true);
            echo "

  <h3>Requested Reason</h3>
  ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "reason", array()), "html", null, true);
            echo "

  <hr/>

  ";
            // line 18
            if (($this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "completed", array()) != "Yes")) {
                // line 19
                echo "  <p>Is the requested amount feasiable?
    <select>
      <option>Yes</option>
      <option>No</option>
    </select>
  </p>
  <p><h4>Reasoning</h4><textarea cols=\"100\" rows=\"10\"></textarea></p>
  <p><input type=\"submit\" value=\"Save Review\" /></p>
  ";
            } else {
                // line 28
                echo "    <p>
      This request has already been completed. The balance request was <strong>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "status", array()), "html", null, true);
                echo "</strong>
      for the following reasons:
    </p>
    <p>
      ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "decision_reasoning", array()), "html", null, true);
                echo "
    </p>
  ";
            }
            // line 36
            echo "
";
        } else {
            // line 38
            echo "
<p>
  ";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
</p>

";
        }
    }

    public function getTemplateName()
    {
        return "admin-balance-request-review.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  85 => 38,  81 => 36,  75 => 33,  68 => 29,  65 => 28,  54 => 19,  52 => 18,  45 => 14,  39 => 11,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h1>Balance Request #{{ balance_request.id }}</h1>*/
/* */
/* {% if error is not defined %}*/
/* */
/*   <p>You are reviewing a balance request for the character <strong>{{ balance_request.name }}</strong>*/
/*   you should remember to be impartial and assess the claims to the best of your ability. If you*/
/*   are unsure on whether a claim is factual or not, you should seek out aid from the community*/
/*   rather than performing guess work. Your request reviews are logged.</p>*/
/* */
/*   <h3>Requested Amount</h3>*/
/*   {{ balance_request.amount }}*/
/* */
/*   <h3>Requested Reason</h3>*/
/*   {{ balance_request.reason }}*/
/* */
/*   <hr/>*/
/* */
/*   {% if balance_request.completed != 'Yes' %}*/
/*   <p>Is the requested amount feasiable?*/
/*     <select>*/
/*       <option>Yes</option>*/
/*       <option>No</option>*/
/*     </select>*/
/*   </p>*/
/*   <p><h4>Reasoning</h4><textarea cols="100" rows="10"></textarea></p>*/
/*   <p><input type="submit" value="Save Review" /></p>*/
/*   {% else %}*/
/*     <p>*/
/*       This request has already been completed. The balance request was <strong>{{ balance_request.status }}</strong>*/
/*       for the following reasons:*/
/*     </p>*/
/*     <p>*/
/*       {{ balance_request.decision_reasoning }}*/
/*     </p>*/
/*   {% endif %}*/
/* */
/* {% else %}*/
/* */
/* <p>*/
/*   {{ error }}*/
/* </p>*/
/* */
/* {% endif %}*/
/* */
