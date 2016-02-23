<?php

/* transactions-previous.php */
class __TwigTemplate_b1d86ad47d30bb2d7d0d8419d7c77f75fc72c7db353fe68113e2cbc6040c69e2 extends Twig_Template
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
        echo "<h1>Previous Transactions</h1>

<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "'s current balance</h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["balance"]) ? $context["balance"] : null), "amount", array()), "html", null, true);
        echo "

<h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "'s Sent Transactions</h3>

<table border=\"1\">
<tr>
    <td>
      Sender Name
    </td>
    <td>
      Recipient Name
    </td>
    <td>
      Amount
    </td>
</tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sent_transactions"]) ? $context["sent_transactions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 20
            echo "<tr>
  <td>
    ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "senderName", array()), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "recipientName", array()), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "
  </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>

<h3>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["character"]) ? $context["character"] : null), "name", array()), "html", null, true);
        echo "'s Received Transactions</h3>

<table border=\"1\">
<tr>
    <td>
      Sender Name
    </td>
    <td>
      Recipient Name
    </td>
    <td>
      Amount
    </td>
</tr>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["received_transactions"]) ? $context["received_transactions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 49
            echo "<tr>
  <td>
    ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "senderName", array()), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "recipientName", array()), "html", null, true);
            echo "
  </td>
  <td>
    ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "
  </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "transactions-previous.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  118 => 57,  112 => 54,  106 => 51,  102 => 49,  98 => 48,  81 => 34,  77 => 32,  67 => 28,  61 => 25,  55 => 22,  51 => 20,  47 => 19,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <h1>Previous Transactions</h1>*/
/* */
/* <h2>{{ character.name }}'s current balance</h2> {{ balance.amount }}*/
/* */
/* <h3>{{ character.name }}'s Sent Transactions</h3>*/
/* */
/* <table border="1">*/
/* <tr>*/
/*     <td>*/
/*       Sender Name*/
/*     </td>*/
/*     <td>*/
/*       Recipient Name*/
/*     </td>*/
/*     <td>*/
/*       Amount*/
/*     </td>*/
/* </tr>*/
/* {% for transaction in sent_transactions %}*/
/* <tr>*/
/*   <td>*/
/*     {{ transaction.senderName }}*/
/*   </td>*/
/*   <td>*/
/*     {{ transaction.recipientName}}*/
/*   </td>*/
/*   <td>*/
/*     {{ transaction.amount}}*/
/*   </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* */
/* <h3>{{ character.name }}'s Received Transactions</h3>*/
/* */
/* <table border="1">*/
/* <tr>*/
/*     <td>*/
/*       Sender Name*/
/*     </td>*/
/*     <td>*/
/*       Recipient Name*/
/*     </td>*/
/*     <td>*/
/*       Amount*/
/*     </td>*/
/* </tr>*/
/* {% for transaction in received_transactions %}*/
/* <tr>*/
/*   <td>*/
/*     {{ transaction.senderName}}*/
/*   </td>*/
/*   <td>*/
/*     {{ transaction.recipientName}}*/
/*   </td>*/
/*   <td>*/
/*     {{ transaction.amount}}*/
/*   </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* */
