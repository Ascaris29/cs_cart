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

/* __string_template__60840d250a2903be8586b458171ebb974716fc82e0866918a67a4ddf15005d98 */
class __TwigTemplate_291dda1f597c9f2645754ac2825c5023cfd6d3d0228922c56aebbb84017f14e1 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.vendor_plan_has_been_changed", ["[vendor]" => ($context["vendor_name"] ?? null), "[plan]" => $this->getAttribute(($context["plan"] ?? null), "plan", [])]);
    }

    public function getTemplateName()
    {
        return "__string_template__60840d250a2903be8586b458171ebb974716fc82e0866918a67a4ddf15005d98";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__60840d250a2903be8586b458171ebb974716fc82e0866918a67a4ddf15005d98", "");
    }
}
