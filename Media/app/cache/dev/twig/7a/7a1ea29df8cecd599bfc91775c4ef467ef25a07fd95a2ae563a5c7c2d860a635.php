<?php

/* :commentaire:new.html.twig */
class __TwigTemplate_437fbd112572827e943e9788ed4b144240eaa633d6ea176eec175d47ed100456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaire:new.html.twig", 1);
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
        $__internal_365bb138f487b5e5fbaba7b416a1534b6b4fffe26b8a5f46f296cd223640161b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365bb138f487b5e5fbaba7b416a1534b6b4fffe26b8a5f46f296cd223640161b->enter($__internal_365bb138f487b5e5fbaba7b416a1534b6b4fffe26b8a5f46f296cd223640161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaire:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365bb138f487b5e5fbaba7b416a1534b6b4fffe26b8a5f46f296cd223640161b->leave($__internal_365bb138f487b5e5fbaba7b416a1534b6b4fffe26b8a5f46f296cd223640161b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a29f9753ab17ec9eb46b6b524a154e23700d493c6985112dabc6a78005edbe04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29f9753ab17ec9eb46b6b524a154e23700d493c6985112dabc6a78005edbe04->enter($__internal_a29f9753ab17ec9eb46b6b524a154e23700d493c6985112dabc6a78005edbe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a29f9753ab17ec9eb46b6b524a154e23700d493c6985112dabc6a78005edbe04->leave($__internal_a29f9753ab17ec9eb46b6b524a154e23700d493c6985112dabc6a78005edbe04_prof);

    }

    public function getTemplateName()
    {
        return ":commentaire:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Commentaire creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('commentaire_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":commentaire:new.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/commentaire/new.html.twig");
    }
}
