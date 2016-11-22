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
        $__internal_a0b7a2f1f5111f6a0c749f4a19aa07ffceede1a4ca90ca304ee479b3059c94bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b7a2f1f5111f6a0c749f4a19aa07ffceede1a4ca90ca304ee479b3059c94bd->enter($__internal_a0b7a2f1f5111f6a0c749f4a19aa07ffceede1a4ca90ca304ee479b3059c94bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b7a2f1f5111f6a0c749f4a19aa07ffceede1a4ca90ca304ee479b3059c94bd->leave($__internal_a0b7a2f1f5111f6a0c749f4a19aa07ffceede1a4ca90ca304ee479b3059c94bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b6dac74df9fc8e09a1f88c1a0344e66e590ebd3430e86d17c996f3630a579a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b6dac74df9fc8e09a1f88c1a0344e66e590ebd3430e86d17c996f3630a579a->enter($__internal_50b6dac74df9fc8e09a1f88c1a0344e66e590ebd3430e86d17c996f3630a579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50b6dac74df9fc8e09a1f88c1a0344e66e590ebd3430e86d17c996f3630a579a->leave($__internal_50b6dac74df9fc8e09a1f88c1a0344e66e590ebd3430e86d17c996f3630a579a_prof);

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
