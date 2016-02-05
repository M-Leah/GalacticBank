<?php

/* character-profile.php */
class __TwigTemplate_256aebac2f69d713562903cffc51bee84fbbadd75fb68819a03a8fd147461822 extends Twig_Template
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
        echo "<h1>Character Profile</h1>

<p>Name: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "</p>
<p>Faction: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "faction", array()), "html", null, true);
        echo "</p>
<p>Balance: TBD.</p>

";
        // line 7
        if (($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "user_id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 8
            echo "  ";
            if ((null === $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "balance_id", array()))) {
                // line 9
                echo "    This character currently does not have a balance. Apply for one <a href=\"/balance/apply/";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), " ", "-")), "html", null, true);
                echo "\">here</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "character-profile.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Character Profile</h1>*/
/* */
/* <p>Name: {{ character.name }}</p>*/
/* <p>Faction: {{ character.faction }}</p>*/
/* <p>Balance: TBD.</p>*/
/* */
/* {% if character.user_id == user.id %}*/
/*   {% if character.balance_id is null %}*/
/*     This character currently does not have a balance. Apply for one <a href="/balance/apply/{{ character.name|replace(' ', '-')|url_encode }}">here</a>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
