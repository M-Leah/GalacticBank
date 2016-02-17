<?php

/* transaction-create.php */
class __TwigTemplate_c56af3c41222a4d92ceb34713cd5ca2f3e2f322a302672498087b7fbd02db353 extends Twig_Template
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
        echo "<h1>New Transaction</h1>

";
        // line 3
        if (array_key_exists("error", $context)) {
            // line 4
            echo "
  ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "

";
        } else {
            // line 8
            echo "<form method=\"post\">
  <p>
    <strong>Transfer funds from:</strong>
    <select>
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["characters"]) ? $context["characters"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 13
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "id", array()), "html", null, true);
                echo "\">
          ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                echo "
        </option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </select>
  </p>

  <p>
    <strong>Transfer funds to:</strong>
    <input type=\"text\" name=\"recipient_name\" />
  </p>

  <p>
    <strong>Transfer Amount:</strong>
    <input type=\"text\" pattern=\"[0-9]\" name=\"amount\" />
  </p>

  <p>
    <input type=\"submit\" value=\"Transfer\" />
  </p>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "transaction-create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  49 => 14,  44 => 13,  40 => 12,  34 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>New Transaction</h1>*/
/* */
/* {% if error is defined %}*/
/* */
/*   {{ error }}*/
/* */
/* {% else %}*/
/* <form method="post">*/
/*   <p>*/
/*     <strong>Transfer funds from:</strong>*/
/*     <select>*/
/*       {% for character in characters %}*/
/*         <option value="{{ character.id }}">*/
/*           {{ character.name }}*/
/*         </option>*/
/*       {% endfor %}*/
/*     </select>*/
/*   </p>*/
/* */
/*   <p>*/
/*     <strong>Transfer funds to:</strong>*/
/*     <input type="text" name="recipient_name" />*/
/*   </p>*/
/* */
/*   <p>*/
/*     <strong>Transfer Amount:</strong>*/
/*     <input type="text" pattern="[0-9]" name="amount" />*/
/*   </p>*/
/* */
/*   <p>*/
/*     <input type="submit" value="Transfer" />*/
/*   </p>*/
/* </form>*/
/* {% endif %}*/
/* */
