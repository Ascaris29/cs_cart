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

/* __string_template__7fafcd54c82b4bc7fd73804722cf9f2d5e1b1392d813a28154e314c5e7c2280a */
class __TwigTemplate_c4c80547aafd7ab4fd91d4a0bfb986548fcbb9480f7e756076c524ac4a79d2cb extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_communication.new_message.message");
    }

    public function getTemplateName()
    {
        return "__string_template__7fafcd54c82b4bc7fd73804722cf9f2d5e1b1392d813a28154e314c5e7c2280a";
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
        return new Source("", "__string_template__7fafcd54c82b4bc7fd73804722cf9f2d5e1b1392d813a28154e314c5e7c2280a", "");
    }
}
