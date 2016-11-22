<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f70bd37ffa004349a54575b24cc33d57538486818a1cabf768024c7c14241fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c72db22725de96c1c14a21ee993db1ae7d9e8fa276de43d812d95e96f55a6607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72db22725de96c1c14a21ee993db1ae7d9e8fa276de43d812d95e96f55a6607->enter($__internal_c72db22725de96c1c14a21ee993db1ae7d9e8fa276de43d812d95e96f55a6607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72db22725de96c1c14a21ee993db1ae7d9e8fa276de43d812d95e96f55a6607->leave($__internal_c72db22725de96c1c14a21ee993db1ae7d9e8fa276de43d812d95e96f55a6607_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_223b8d8d31a91c93af6f8edf9af27a709084299e527ad84fdd1318d5b09d7998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223b8d8d31a91c93af6f8edf9af27a709084299e527ad84fdd1318d5b09d7998->enter($__internal_223b8d8d31a91c93af6f8edf9af27a709084299e527ad84fdd1318d5b09d7998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_223b8d8d31a91c93af6f8edf9af27a709084299e527ad84fdd1318d5b09d7998->leave($__internal_223b8d8d31a91c93af6f8edf9af27a709084299e527ad84fdd1318d5b09d7998_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4e1e52f3ecdbb22bced7626430bf741d92b5862ec76235eade05303fe77f273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e1e52f3ecdbb22bced7626430bf741d92b5862ec76235eade05303fe77f273->enter($__internal_b4e1e52f3ecdbb22bced7626430bf741d92b5862ec76235eade05303fe77f273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4e1e52f3ecdbb22bced7626430bf741d92b5862ec76235eade05303fe77f273->leave($__internal_b4e1e52f3ecdbb22bced7626430bf741d92b5862ec76235eade05303fe77f273_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90ff6e9ad3c54e2390619580e80a202378f517982236f5aeb668cde134ebf8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ff6e9ad3c54e2390619580e80a202378f517982236f5aeb668cde134ebf8c2->enter($__internal_90ff6e9ad3c54e2390619580e80a202378f517982236f5aeb668cde134ebf8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90ff6e9ad3c54e2390619580e80a202378f517982236f5aeb668cde134ebf8c2->leave($__internal_90ff6e9ad3c54e2390619580e80a202378f517982236f5aeb668cde134ebf8c2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
