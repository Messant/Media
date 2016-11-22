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
        $__internal_ee25cabad58146e7746c1655ccc871d4344b77325d2b24e7585dd2e0951a9dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee25cabad58146e7746c1655ccc871d4344b77325d2b24e7585dd2e0951a9dbe->enter($__internal_ee25cabad58146e7746c1655ccc871d4344b77325d2b24e7585dd2e0951a9dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee25cabad58146e7746c1655ccc871d4344b77325d2b24e7585dd2e0951a9dbe->leave($__internal_ee25cabad58146e7746c1655ccc871d4344b77325d2b24e7585dd2e0951a9dbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b22dc582a6f44aefd5607e2876268e7779a99c4c4e52b9aac55813b91cc867af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22dc582a6f44aefd5607e2876268e7779a99c4c4e52b9aac55813b91cc867af->enter($__internal_b22dc582a6f44aefd5607e2876268e7779a99c4c4e52b9aac55813b91cc867af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b22dc582a6f44aefd5607e2876268e7779a99c4c4e52b9aac55813b91cc867af->leave($__internal_b22dc582a6f44aefd5607e2876268e7779a99c4c4e52b9aac55813b91cc867af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20ac7a3d1de3c9b9383858283465b7132f4d49664fa76fc696a6cdccbcbc15a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ac7a3d1de3c9b9383858283465b7132f4d49664fa76fc696a6cdccbcbc15a8->enter($__internal_20ac7a3d1de3c9b9383858283465b7132f4d49664fa76fc696a6cdccbcbc15a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20ac7a3d1de3c9b9383858283465b7132f4d49664fa76fc696a6cdccbcbc15a8->leave($__internal_20ac7a3d1de3c9b9383858283465b7132f4d49664fa76fc696a6cdccbcbc15a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd58746a4c0aa2a8068d5d81bd3e3cf47e615375f73ffe74867c69d0f10464fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd58746a4c0aa2a8068d5d81bd3e3cf47e615375f73ffe74867c69d0f10464fd->enter($__internal_bd58746a4c0aa2a8068d5d81bd3e3cf47e615375f73ffe74867c69d0f10464fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd58746a4c0aa2a8068d5d81bd3e3cf47e615375f73ffe74867c69d0f10464fd->leave($__internal_bd58746a4c0aa2a8068d5d81bd3e3cf47e615375f73ffe74867c69d0f10464fd_prof);

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
