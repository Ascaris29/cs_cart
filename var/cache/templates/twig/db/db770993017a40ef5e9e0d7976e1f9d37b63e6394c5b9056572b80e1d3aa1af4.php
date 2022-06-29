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

/* __string_template__3093240d12a1039ee0e9f8e1e7690df87794660cda12ddc42bd03cf20814566b */
class __TwigTemplate_5699165a7e9d763096d99b15ab878433bde322c827ca4f67aacaa444d8bab682 extends \Twig\Template
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
<br />
";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_invitation_email_body", ["[create_account_url]" => ($context["create_account_url"] ?? null), "[default_company_name]" => ($context["company_name"] ?? null)]);
        echo "
<br />
";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__3093240d12a1039ee0e9f8e1e7690df87794660cda12ddc42bd03cf20814566b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3093240d12a1039ee0e9f8e1e7690df87794660cda12ddc42bd03cf20814566b", "");
    }
}
