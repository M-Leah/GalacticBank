<?php

/* create.php */
class __TwigTemplate_62b75bd0572125d4a6d206b86feb3573f22df960ccc26ddce803decdf7d685cc extends Twig_Template
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
        echo "<h1>Character/Create Page</h1>

<p>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
        echo "</p>
<form method=\"post\">
  <input type=\"text\" name=\"name\" />
  <select name=\"faction\">
    <option value=\"Jedi\">Jedi</option>
    <option value=\"Sith\">Sith</option>
    <option value=\"Other\">Other</option>
  </select>
  <input type=\"submit\" value=\"Create\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <h1>Character/Create Page</h1>*/
/* */
/* <p>{{ success }}</p>*/
/* <form method="post">*/
/*   <input type="text" name="name" />*/
/*   <select name="faction">*/
/*     <option value="Jedi">Jedi</option>*/
/*     <option value="Sith">Sith</option>*/
/*     <option value="Other">Other</option>*/
/*   </select>*/
/*   <input type="submit" value="Create" />*/
/* </form>*/
/* */
