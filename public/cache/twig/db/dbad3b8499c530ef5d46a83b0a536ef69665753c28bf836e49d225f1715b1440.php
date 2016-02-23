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
        // line 2
        if (array_key_exists("success", $context)) {
            // line 3
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
            echo "
";
        }
        // line 5
        if (array_key_exists("error", $context)) {
            // line 6
            echo "
  ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "

";
        } else {
            // line 10
            echo "<form method=\"post\">
  <p>
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["senderError"]) ? $context["senderError"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "      <p style=\"color:red;\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    <strong>Transfer funds from:</strong>
    <select name=\"sender\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["characters"]) ? $context["characters"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 18
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "id", array()), "html", null, true);
                echo "\">
          ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                echo "
        </option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </select>
  </p>

  <p>
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipientError"]) ? $context["recipientError"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "      <p style=\"color:red;\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    <strong>Transfer funds to:</strong>
    <input type=\"text\" name=\"recipient\" />
  </p>

  <p>
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["amountError"]) ? $context["amountError"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 35
                echo "      <p style=\"color:red;\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    <strong>Transfer Amount:</strong>
    <input type=\"text\" pattern=\"[0-9]+\" name=\"amount\" />
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
        return array (  119 => 37,  110 => 35,  106 => 34,  99 => 29,  90 => 27,  86 => 26,  80 => 22,  71 => 19,  66 => 18,  62 => 17,  58 => 15,  49 => 13,  45 => 12,  41 => 10,  35 => 7,  32 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1>New Transaction</h1>*/
/* {% if success is defined %}*/
/*   {{ success }}*/
/* {% endif %}*/
/* {% if error is defined %}*/
/* */
/*   {{ error }}*/
/* */
/* {% else %}*/
/* <form method="post">*/
/*   <p>*/
/*     {% for error in senderError %}*/
/*       <p style="color:red;">{{ error }}</p>*/
/*     {% endfor %}*/
/*     <strong>Transfer funds from:</strong>*/
/*     <select name="sender">*/
/*       {% for character in characters %}*/
/*         <option value="{{ character.id }}">*/
/*           {{ character.name }}*/
/*         </option>*/
/*       {% endfor %}*/
/*     </select>*/
/*   </p>*/
/* */
/*   <p>*/
/*     {% for error in recipientError %}*/
/*       <p style="color:red;">{{ error }}</p>*/
/*     {% endfor %}*/
/*     <strong>Transfer funds to:</strong>*/
/*     <input type="text" name="recipient" />*/
/*   </p>*/
/* */
/*   <p>*/
/*     {% for error in amountError %}*/
/*       <p style="color:red;">{{ error }}</p>*/
/*     {% endfor %}*/
/*     <strong>Transfer Amount:</strong>*/
/*     <input type="text" pattern="[0-9]+" name="amount" />*/
/*   </p>*/
/* */
/*   <p>*/
/*     <input type="submit" value="Transfer" />*/
/*   </p>*/
/* </form>*/
/* {% endif %}*/
/* */
