<?php

/* login.php */
class __TwigTemplate_523c96f7d582404dd54b887dffc8432b6ac176b03bea33c873f13c8f8aea1d2b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

  <head>
    <title>Galactic Bank | Login</title>
  </head>

  <body>
    <h1>Galactic Bank Login</h1>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</p>
    <form method=\"post\">
      <input type=\"text\" name=\"username\" />
      <input type=\"password\" name=\"password\" />
      <input type=\"submit\" value=\"Log in\" />
    </form>
  </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "login.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/*   <head>*/
/*     <title>Galactic Bank | Login</title>*/
/*   </head>*/
/* */
/*   <body>*/
/*     <h1>Galactic Bank Login</h1>*/
/*     <p>{{ error }}</p>*/
/*     <form method="post">*/
/*       <input type="text" name="username" />*/
/*       <input type="password" name="password" />*/
/*       <input type="submit" value="Log in" />*/
/*     </form>*/
/*   </body>*/
/* */
/* </html>*/
/* */
