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

/* __string_template__5f2513fc0c7b3af671578b545078b17f162f3283a3463f4f578249ac72a520d6 */
class __TwigTemplate_d33eb0cdf17b1dd36a144e67d8b76d65a32bfb975f02fabc5137a83b626d05c3 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_communication.subject_email", ["[message_from]" => ($context["message_from"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__5f2513fc0c7b3af671578b545078b17f162f3283a3463f4f578249ac72a520d6";
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
        return new Source("", "__string_template__5f2513fc0c7b3af671578b545078b17f162f3283a3463f4f578249ac72a520d6", "");
    }
}
