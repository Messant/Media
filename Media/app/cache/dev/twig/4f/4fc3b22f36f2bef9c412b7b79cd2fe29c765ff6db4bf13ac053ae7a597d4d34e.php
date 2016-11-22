<?php

/* album/new.html.twig */
class __TwigTemplate_ff54d1c6f968c21491de8658c413c493e74b39be836ef6019e93492b82499e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "album/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27cdf5a3955a5c754257fd4a2077837d1d77f42da94ed628d4a9c5d47731abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cdf5a3955a5c754257fd4a2077837d1d77f42da94ed628d4a9c5d47731abef->enter($__internal_27cdf5a3955a5c754257fd4a2077837d1d77f42da94ed628d4a9c5d47731abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27cdf5a3955a5c754257fd4a2077837d1d77f42da94ed628d4a9c5d47731abef->leave($__internal_27cdf5a3955a5c754257fd4a2077837d1d77f42da94ed628d4a9c5d47731abef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f96c1d4fa7dba8d1f620c777b0feb1d1621a6e75d684a45124daf49df5e6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f96c1d4fa7dba8d1f620c777b0feb1d1621a6e75d684a45124daf49df5e6c6->enter($__internal_a2f96c1d4fa7dba8d1f620c777b0feb1d1621a6e75d684a45124daf49df5e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Album creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_a2f96c1d4fa7dba8d1f620c777b0feb1d1621a6e75d684a45124daf49df5e6c6->leave($__internal_a2f96c1d4fa7dba8d1f620c777b0feb1d1621a6e75d684a45124daf49df5e6c6_prof);

    }

    public function getTemplateName()
    {
        return "album/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
    <h1>Album creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('album_index') }}\">Back to the list</a>
        </li>
    </ul>
    </div>
{% endblock %}
", "album/new.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/new.html.twig");
    }
}
