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

/* __string_template__fcc79c5c2f2cd6ade3ae080f57b8c3141ba1bf7424294d95820a308ffaf3cce3 */
class __TwigTemplate_d28b4164cdebb37afe6d7d0fd86334221db66f4cfa237e498a4d738fb7ecc62b extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_plans.plan_has_been_changed");
    }

    public function getTemplateName()
    {
        return "__string_template__fcc79c5c2f2cd6ade3ae080f57b8c3141ba1bf7424294d95820a308ffaf3cce3";
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
        return new Source("", "__string_template__fcc79c5c2f2cd6ade3ae080f57b8c3141ba1bf7424294d95820a308ffaf3cce3", "");
    }
}
