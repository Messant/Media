<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ee158d62d700053cc4d8ff5ae4dc96b012fd352e52cf632968158d4970f10f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33c6e91831e37841bcecf07903da9f734524b5197bdfe2556a93810167c71c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c6e91831e37841bcecf07903da9f734524b5197bdfe2556a93810167c71c7b->enter($__internal_33c6e91831e37841bcecf07903da9f734524b5197bdfe2556a93810167c71c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c6e91831e37841bcecf07903da9f734524b5197bdfe2556a93810167c71c7b->leave($__internal_33c6e91831e37841bcecf07903da9f734524b5197bdfe2556a93810167c71c7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75610fe15a16a1949ef9679e0600475dd3f4ba261476497e69ac1bf8c4f73990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75610fe15a16a1949ef9679e0600475dd3f4ba261476497e69ac1bf8c4f73990->enter($__internal_75610fe15a16a1949ef9679e0600475dd3f4ba261476497e69ac1bf8c4f73990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75610fe15a16a1949ef9679e0600475dd3f4ba261476497e69ac1bf8c4f73990->leave($__internal_75610fe15a16a1949ef9679e0600475dd3f4ba261476497e69ac1bf8c4f73990_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce0f1cbe48d8156c445079b53a7207ffcf4a4b22588013c3fb887f9da6156dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0f1cbe48d8156c445079b53a7207ffcf4a4b22588013c3fb887f9da6156dcf->enter($__internal_ce0f1cbe48d8156c445079b53a7207ffcf4a4b22588013c3fb887f9da6156dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce0f1cbe48d8156c445079b53a7207ffcf4a4b22588013c3fb887f9da6156dcf->leave($__internal_ce0f1cbe48d8156c445079b53a7207ffcf4a4b22588013c3fb887f9da6156dcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8634fbcd28d6f5fed37122ddac36e3baee7addfe1db70cd33897854fb9e2d596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8634fbcd28d6f5fed37122ddac36e3baee7addfe1db70cd33897854fb9e2d596->enter($__internal_8634fbcd28d6f5fed37122ddac36e3baee7addfe1db70cd33897854fb9e2d596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8634fbcd28d6f5fed37122ddac36e3baee7addfe1db70cd33897854fb9e2d596->leave($__internal_8634fbcd28d6f5fed37122ddac36e3baee7addfe1db70cd33897854fb9e2d596_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
