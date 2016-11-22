<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a5f2870b7d008a29cf0cec74253d07028fdad5af7426fe6027ea7f6c5dd3affe extends Twig_Template
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
        $__internal_6fc7abc86f165cdd338cae84b7ec87e6776f76f219e0c7ad441be9bfb36e5618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc7abc86f165cdd338cae84b7ec87e6776f76f219e0c7ad441be9bfb36e5618->enter($__internal_6fc7abc86f165cdd338cae84b7ec87e6776f76f219e0c7ad441be9bfb36e5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6fc7abc86f165cdd338cae84b7ec87e6776f76f219e0c7ad441be9bfb36e5618->leave($__internal_6fc7abc86f165cdd338cae84b7ec87e6776f76f219e0c7ad441be9bfb36e5618_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
