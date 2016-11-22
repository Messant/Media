<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_30d2cddebcc54126e58e622cbb9fd4bcf081758f793530057082cea394db1e1e extends Twig_Template
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
        $__internal_b068695acc183c61b384d25731a9491a1a5c63c8ce1ea767b277ec22f9e19b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b068695acc183c61b384d25731a9491a1a5c63c8ce1ea767b277ec22f9e19b73->enter($__internal_b068695acc183c61b384d25731a9491a1a5c63c8ce1ea767b277ec22f9e19b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b068695acc183c61b384d25731a9491a1a5c63c8ce1ea767b277ec22f9e19b73->leave($__internal_b068695acc183c61b384d25731a9491a1a5c63c8ce1ea767b277ec22f9e19b73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
