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

/* __string_template__662d1c1df1b6f1fcb6f5d3b830bac615c307c6a95a884c0cf468b5b7b77077fe */
class __TwigTemplate_89a8be173ac73bf9db601c4497375cea2a02523cc2b5277feafd4fe16dc5460c extends \Twig\Template
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
        echo "
                ";
        // line 2
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "
                <p>
                    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
        echo ",
                </p>
                <p>
                    ";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_communication.you_have_new_message", ["[thread_url]" => ($context["thread_url"] ?? null), "[message_from]" => ($context["message_from"] ?? null)]);
        echo "
                </p>
                ";
        // line 9
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__662d1c1df1b6f1fcb6f5d3b830bac615c307c6a95a884c0cf468b5b7b77077fe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  44 => 7,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__662d1c1df1b6f1fcb6f5d3b830bac615c307c6a95a884c0cf468b5b7b77077fe", "");
    }
}
