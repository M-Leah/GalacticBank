<?php

/* transaction-character-list.php */
class __TwigTemplate_9aa2c78bcae33b700acd563c25b8ed90d15e20931e08814d2fd2430a1facc32e extends Twig_Template
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
        echo "<h1>Transaction Character List</h1>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["characters"]) ? $context["characters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 4
            echo "  <p><a href=\"/transaction/list/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
            echo "</a></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "transaction-character-list.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Transaction Character List</h1>*/
/* */
/* {% for character in characters %}*/
/*   <p><a href="/transaction/list/{{ character.id }}">{{ character.name }}</a></p>*/
/* {% endfor %}*/
/* */
