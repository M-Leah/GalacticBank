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

<p>Name: <strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "</strong></p>
<p>Faction: <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "faction", array()), "html", null, true);
        echo "</p></strong>
<p>Balance:
  ";
        // line 6
        if ((isset($context["balance"]) ? $context["balance"] : null)) {
            // line 7
            echo "    <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance"]) ? $context["balance"] : null), "amount", array()), "html", null, true);
            echo "</strong>
  ";
        } else {
            // line 9
            echo "    <strong>-</strong>
  ";
        }
        // line 11
        echo "</p>

";
        // line 13
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "user_id", array())) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "permission_level", array()) == "Administrator"))) {
            // line 14
            echo "  ";
            if ((null === (isset($context["balance_request"]) ? $context["balance_request"] : null))) {
                // line 15
                echo "    This character currently does not have a balance. Apply for one
    <a href=\"/balance/apply/";
                // line 16
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), " ", "-")), "html", null, true);
                echo "\">here</a>
  ";
            } elseif ((($this->getAttribute(            // line 17
(isset($context["balance_request"]) ? $context["balance_request"] : null), "completed", array()) == "No") && ($this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "status", array()) != "Rejected"))) {
                // line 18
                echo "    The current balance request for this character is: <a href=\"/balance/view-application/";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_replace_filter($this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), " ", "-")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "status", array()), "html", null, true);
                echo "</a>
  ";
            } elseif ((($this->getAttribute(            // line 19
(isset($context["balance_request"]) ? $context["balance_request"] : null), "complete", array()) == "Yes") && ($this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "status", array()) == "Rejected"))) {
                // line 20
                echo "    Your balance request has been rejected for the following reason:
    <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance_request"]) ? $context["balance_request"] : null), "decision_reasoning", array()), "html", null, true);
                echo "</p>
    This character may submit a new balance request <a href=\"/balance/apply/";
                // line 22
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
        return array (  78 => 22,  74 => 21,  71 => 20,  69 => 19,  62 => 18,  60 => 17,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  44 => 11,  40 => 9,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Character Profile</h1>*/
/* */
/* <p>Name: <strong>{{ character.name }}</strong></p>*/
/* <p>Faction: <strong>{{ character.faction }}</p></strong>*/
/* <p>Balance:*/
/*   {% if balance %}*/
/*     <strong>{{ balance.amount }}</strong>*/
/*   {% else %}*/
/*     <strong>-</strong>*/
/*   {% endif %}*/
/* </p>*/
/* */
/* {% if user.id == character.user_id or user.permission_level == 'Administrator' %}*/
/*   {% if balance_request is null %}*/
/*     This character currently does not have a balance. Apply for one*/
/*     <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>*/
/*   {% elseif balance_request.completed == 'No' and balance_request.status != 'Rejected' %}*/
/*     The current balance request for this character is: <a href="/balance/view-application/{{ character.name|replace(' ', '-') | url_encode }}">{{ balance_request.status }}</a>*/
/*   {% elseif balance_request.complete == 'Yes' and balance_request.status == 'Rejected' %}*/
/*     Your balance request has been rejected for the following reason:*/
/*     <p>{{ balance_request.decision_reasoning }}</p>*/
/*     This character may submit a new balance request <a href="/balance/apply/{{ character.name|replace(' ', '-') | url_encode }}">here</a>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
