<?php

/* :commentaire:edit.html.twig */
class __TwigTemplate_a63dc671f0e69935d201d4d718c8a60154bf84eaccd43a836f40805d2359453e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaire:edit.html.twig", 1);
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
        $__internal_75f77df69bd114d1f42c7afaea8460c00ad8a8d17a29094dbac76b61c16425ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f77df69bd114d1f42c7afaea8460c00ad8a8d17a29094dbac76b61c16425ce->enter($__internal_75f77df69bd114d1f42c7afaea8460c00ad8a8d17a29094dbac76b61c16425ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaire:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f77df69bd114d1f42c7afaea8460c00ad8a8d17a29094dbac76b61c16425ce->leave($__internal_75f77df69bd114d1f42c7afaea8460c00ad8a8d17a29094dbac76b61c16425ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9261d0e37c4d4c073855e1828918913355382138a8c6eeca22d18988709e4ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9261d0e37c4d4c073855e1828918913355382138a8c6eeca22d18988709e4ffa->enter($__internal_9261d0e37c4d4c073855e1828918913355382138a8c6eeca22d18988709e4ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9261d0e37c4d4c073855e1828918913355382138a8c6eeca22d18988709e4ffa->leave($__internal_9261d0e37c4d4c073855e1828918913355382138a8c6eeca22d18988709e4ffa_prof);

    }

    public function getTemplateName()
    {
        return ":commentaire:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Commentaire edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('commentaire_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":commentaire:edit.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/commentaire/edit.html.twig");
    }
}
