<?php

/* admin-balance-requests.php */
class __TwigTemplate_26aac4d4bed9ed4c9363308911a9eec4d18fa2cd096ff131c08356dc6c5737d3 extends Twig_Template
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
        echo "<h1>Balance Requests</h1>

<h3>Pending Requests</h3>
<table>
  <tr>
    <th>Character Name</th>
    <th>Balance Requested</th>
    <th>Date Requested</th>
  </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pending_requests"]) ? $context["pending_requests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 11
            echo "    <tr>
      <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "amount", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "created_at", array()), "html", null, true);
            echo "</td> <!-- TODO: Using character created date rather than balance date -->
      <td><a href=\"/admin/balance-request/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "id", array()), "html", null, true);
            echo "\">View</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>

<h3>Completed Requests</h3>
<table>
  <tr>
    <th>Character Name</th>
    <th>Balance Requested</th>
    <th>Date Requested</th>
    <th>Status</th>
  </tr>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["completed_requests"]) ? $context["completed_requests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 29
            echo "    <tr>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "amount", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "created_at", array()), "html", null, true);
            echo "</td> <!-- TODO: Using character created date rather than balance date -->
      <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "status", array()), "html", null, true);
            echo "</td>
      <td><a href=\"/admin/balance-request/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "id", array()), "html", null, true);
            echo "\">View</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "admin-balance-requests.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  74 => 29,  70 => 28,  58 => 18,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <h1>Balance Requests</h1>*/
/* */
/* <h3>Pending Requests</h3>*/
/* <table>*/
/*   <tr>*/
/*     <th>Character Name</th>*/
/*     <th>Balance Requested</th>*/
/*     <th>Date Requested</th>*/
/*   </tr>*/
/*     {% for request in pending_requests %}*/
/*     <tr>*/
/*       <td>{{ request.name }}</td>*/
/*       <td>{{ request.amount }}</td>*/
/*       <td>{{ request.created_at }}</td> <!-- TODO: Using character created date rather than balance date -->*/
/*       <td><a href="/admin/balance-request/{{ request.id }}">View</a></td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* <h3>Completed Requests</h3>*/
/* <table>*/
/*   <tr>*/
/*     <th>Character Name</th>*/
/*     <th>Balance Requested</th>*/
/*     <th>Date Requested</th>*/
/*     <th>Status</th>*/
/*   </tr>*/
/*     {% for request in completed_requests %}*/
/*     <tr>*/
/*       <td>{{ request.name }}</td>*/
/*       <td>{{ request.amount }}</td>*/
/*       <td>{{ request.created_at }}</td> <!-- TODO: Using character created date rather than balance date -->*/
/*       <td>{{ request.status }}</td>*/
/*       <td><a href="/admin/balance-request/{{ request.id }}">View</a></td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
