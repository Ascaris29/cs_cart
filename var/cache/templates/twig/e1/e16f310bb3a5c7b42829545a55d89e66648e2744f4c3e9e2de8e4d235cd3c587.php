<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb */
class __TwigTemplate_ab098dddd06d744047944711ca4ec828106697c122df88093b5d55872a88d724 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "update_profile_notification_header")]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["user_data"] ?? null), "firstname", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["user_data"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute(($context["user_data"] ?? null), "email", []);
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo ($context["forgot_pass_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 26
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "billing_address");
        echo "</h4>
          <strong>";
        // line 27
        echo $this->getAttribute(($context["user_data"] ?? null), "b_firstname", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "b_lastname", []);
        echo "</strong><br>
          ";
        // line 28
        echo $this->getAttribute(($context["user_data"] ?? null), "b_address_2", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "b_address", []);
        echo "<br>
          ";
        // line 29
        echo $this->getAttribute(($context["user_data"] ?? null), "b_city", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "b_country", []);
        echo " <br>
          ";
        // line 30
        echo $this->getAttribute(($context["user_data"] ?? null), "b_phone", []);
        echo " <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 38
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo " ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "address");
        echo "</h4>
          <strong>";
        // line 39
        echo $this->getAttribute(($context["user_data"] ?? null), "s_firstname", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "s_lastname", []);
        echo "</strong><br>
          ";
        // line 40
        echo $this->getAttribute(($context["user_data"] ?? null), "s_address_2", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "s_address", []);
        echo "<br>
          ";
        // line 41
        echo $this->getAttribute(($context["user_data"] ?? null), "s_city", []);
        echo " ";
        echo $this->getAttribute(($context["user_data"] ?? null), "s_country", []);
        echo " <br>
          ";
        // line 42
        echo $this->getAttribute(($context["user_data"] ?? null), "s_phone", []);
        echo " <br>
        </td>
      </tr>
    </table>

  ";
        // line 47
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  154 => 42,  148 => 41,  142 => 40,  136 => 39,  130 => 38,  119 => 30,  113 => 29,  107 => 28,  101 => 27,  97 => 26,  85 => 19,  81 => 18,  75 => 15,  71 => 14,  63 => 11,  59 => 10,  53 => 7,  47 => 4,  44 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb", "");
    }
}
