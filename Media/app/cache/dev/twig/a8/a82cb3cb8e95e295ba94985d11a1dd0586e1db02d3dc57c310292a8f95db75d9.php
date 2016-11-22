<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02ee5dded3d65a12ad8b3cb6498f2791540c6e330494ad7b72f430c1a20b1c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8db4b67656c771a888c130603172b030268bedab512a50d4550a5842c3dddd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db4b67656c771a888c130603172b030268bedab512a50d4550a5842c3dddd8->enter($__internal_a8db4b67656c771a888c130603172b030268bedab512a50d4550a5842c3dddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8db4b67656c771a888c130603172b030268bedab512a50d4550a5842c3dddd8->leave($__internal_a8db4b67656c771a888c130603172b030268bedab512a50d4550a5842c3dddd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d160ad661542f7eac1330b2ac53c2401fd0e3e35c2cf2f6bd848ad856244ab5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d160ad661542f7eac1330b2ac53c2401fd0e3e35c2cf2f6bd848ad856244ab5c->enter($__internal_d160ad661542f7eac1330b2ac53c2401fd0e3e35c2cf2f6bd848ad856244ab5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d160ad661542f7eac1330b2ac53c2401fd0e3e35c2cf2f6bd848ad856244ab5c->leave($__internal_d160ad661542f7eac1330b2ac53c2401fd0e3e35c2cf2f6bd848ad856244ab5c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_725f1e1162ca6d1e2301e9a3d18407ff71f625325b88cb183cc72cbdca071ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725f1e1162ca6d1e2301e9a3d18407ff71f625325b88cb183cc72cbdca071ed0->enter($__internal_725f1e1162ca6d1e2301e9a3d18407ff71f625325b88cb183cc72cbdca071ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_725f1e1162ca6d1e2301e9a3d18407ff71f625325b88cb183cc72cbdca071ed0->leave($__internal_725f1e1162ca6d1e2301e9a3d18407ff71f625325b88cb183cc72cbdca071ed0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
