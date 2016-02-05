<?php

/* character.php */
class __TwigTemplate_253b19b94ba8fdd0e9c923554b553dd0ec6d2a40dcf7df02336c39b076d635d1 extends Twig_Template
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
        echo "<h1>Your Characters</h1>

<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["characters"]) ? $context["characters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
            // line 5
            echo "  <li><a href=\"/character/";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute($context["character"], "name", array()), " ", "-")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "character.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <h1>Your Characters</h1>*/
/* */
/* <ul>*/
/* {% for character in characters %}*/
/*   <li><a href="/character/{{ character.name|replace(' ', '-')|url_encode }}">{{ character.name }}</a></li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
