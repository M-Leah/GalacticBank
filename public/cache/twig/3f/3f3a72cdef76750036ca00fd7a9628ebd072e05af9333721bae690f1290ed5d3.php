<?php

/* home.php */
class __TwigTemplate_386e310e1d7e493da137227c5477d26973ad186979cc7f719799e89de5f749e6 extends Twig_Template
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
        echo "<h1>Home Page</h1>

<h3>Some links to routes</h3>
<ul>
  ";
        // line 5
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "permission_level", array()) == "Administrator")) {
            // line 6
            echo "  <li><a href=\"/admin\">Administrator Panel</a></li>
  ";
        }
        // line 8
        echo "  <li><a href=\"/logout\">Logout</a></li>
  <li><a href=\"/character\">Charaters Page</a></li>
  <li><a href=\"/character/create\">Create a Character Page</a></li>
</ul>

<h3>TODO:</h3>
<ul>
  <li>Transaction Route</li>
  <li>Administrator Panel for Accepting/Rejecting Requests</li>
  <li>Characters Route (In progress...)</li>
  <li>Sort out Balances for Characters</li>
  <li>Bounty Terminal Route</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "home.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <h1>Home Page</h1>*/
/* */
/* <h3>Some links to routes</h3>*/
/* <ul>*/
/*   {% if user.permission_level == 'Administrator' %}*/
/*   <li><a href="/admin">Administrator Panel</a></li>*/
/*   {% endif %}*/
/*   <li><a href="/logout">Logout</a></li>*/
/*   <li><a href="/character">Charaters Page</a></li>*/
/*   <li><a href="/character/create">Create a Character Page</a></li>*/
/* </ul>*/
/* */
/* <h3>TODO:</h3>*/
/* <ul>*/
/*   <li>Transaction Route</li>*/
/*   <li>Administrator Panel for Accepting/Rejecting Requests</li>*/
/*   <li>Characters Route (In progress...)</li>*/
/*   <li>Sort out Balances for Characters</li>*/
/*   <li>Bounty Terminal Route</li>*/
/* </ul>*/
/* */
