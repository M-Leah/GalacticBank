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
<p>Balance:
  ";
        // line 6
        if (((isset($context["pending_request"]) ? $context["pending_request"] : null) == "accepted")) {
            // line 7
            echo "    <strong>";
            echo twig_escape_filter($this->env, (isset($context["balance"]) ? $context["balance"] : null), "html", null, true);
            echo "</strong>
  ";
        } elseif ( !(null ===         // line 8
(isset($context["pending_request"]) ? $context["pending_request"] : null))) {
            // line 9
            echo "  <a href=\"/balance/apply/view/";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), " ", "-")), "html", null, true);
            echo "\">
    <strong>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["pending_request"]) ? $context["pending_request"] : null), "html", null, true);
            echo "</strong>
  </a>
  ";
        }
        // line 13
        echo "</p>


";
        // line 16
        if ((null === (isset($context["pending_request"]) ? $context["pending_request"] : null))) {
            // line 17
            echo "  ";
            if (($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "user_id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
                // line 18
                echo "    ";
                if ((null === $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "balance_id", array()))) {
                    // line 19
                    echo "      This character currently does not have a balance. Apply for one
      <a href=\"/balance/apply/";
                    // line 20
                    echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), " ", "-")), "html", null, true);
                    echo "\">here</a>
    ";
                }
                // line 22
                echo "  ";
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
        return array (  73 => 22,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  57 => 16,  52 => 13,  46 => 10,  41 => 9,  39 => 8,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Character Profile</h1>*/
/* */
/* <p>Name: {{ character.name }}</p>*/
/* <p>Faction: {{ character.faction }}</p>*/
/* <p>Balance:*/
/*   {% if pending_request == 'accepted' %}*/
/*     <strong>{{ balance }}</strong>*/
/*   {% elseif not pending_request is null %}*/
/*   <a href="/balance/apply/view/{{ character.name | replace(' ', '-') | url_encode }}">*/
/*     <strong>{{ pending_request }}</strong>*/
/*   </a>*/
/*   {% endif %}*/
/* </p>*/
/* */
/* */
/* {% if pending_request is null %}*/
/*   {% if character.user_id == user.id %}*/
/*     {% if character.balance_id is null %}*/
/*       This character currently does not have a balance. Apply for one*/
/*       <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
