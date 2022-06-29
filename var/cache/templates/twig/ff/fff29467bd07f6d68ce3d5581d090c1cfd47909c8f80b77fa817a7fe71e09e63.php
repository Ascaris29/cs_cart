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

/* __string_template__9f14920ff1511f289761f4f72ce85fbde946ade7898b5f606109c747db1b51d0 */
class __TwigTemplate_77c9a32bfa3d22d89273a56d1f4701ad0b76fa2929a130f47aa6fed1fd40baeb extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "

";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.vendor_plan_has_been_changed_text", ["[vendor]" => ($context["vendor_name"] ?? null), "[old_plan]" => $this->getAttribute(($context["old_plan"] ?? null), "plan", []), "[new_plan]" => $this->getAttribute(($context["plan"] ?? null), "plan", [])]);
        echo "
<br /><br />
";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.old_plan");
        echo ":
<br /><br />
";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "vendorplans.plandetails", ["plan" => ($context["old_plan"] ?? null)]);
        echo "
<br /><br />
";
        // line 9
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.new_plan");
        echo ":
<br /><br />
";
        // line 11
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 12
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__9f14920ff1511f289761f4f72ce85fbde946ade7898b5f606109c747db1b51d0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  50 => 9,  45 => 7,  40 => 5,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f14920ff1511f289761f4f72ce85fbde946ade7898b5f606109c747db1b51d0", "");
    }
}
