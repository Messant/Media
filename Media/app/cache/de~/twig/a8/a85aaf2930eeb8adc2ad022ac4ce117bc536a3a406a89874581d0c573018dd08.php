<?php

/* album/edit.html.twig */
class __TwigTemplate_9f169c4ea7edabf8a3057d7aa9e24d2d08e17972e557892386c93a9624d8d022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "album/edit.html.twig", 1);
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
        $__internal_c6c8ca1a4164ddbbb150f86a5fd1fa426a67d1725b2feee03d6bb1aa56d800be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c8ca1a4164ddbbb150f86a5fd1fa426a67d1725b2feee03d6bb1aa56d800be->enter($__internal_c6c8ca1a4164ddbbb150f86a5fd1fa426a67d1725b2feee03d6bb1aa56d800be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c8ca1a4164ddbbb150f86a5fd1fa426a67d1725b2feee03d6bb1aa56d800be->leave($__internal_c6c8ca1a4164ddbbb150f86a5fd1fa426a67d1725b2feee03d6bb1aa56d800be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ffe0eaffc4a3f6112379113080de19bf4e63be2e6c97fa6c3c7357286c8540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffe0eaffc4a3f6112379113080de19bf4e63be2e6c97fa6c3c7357286c8540c->enter($__internal_4ffe0eaffc4a3f6112379113080de19bf4e63be2e6c97fa6c3c7357286c8540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <section>
            <h1>Album edit</h1>
                <div class=\"tbl-header\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">

            ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Edit\" />
            ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

            <ul>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_index");
        echo "\">Back to the list</a>
                </li>
                <li>
                    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" value=\"Delete\">
                    ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </li>
            </ul>
            </table>
            </div>
        </section>
    </div>

";
        
        $__internal_4ffe0eaffc4a3f6112379113080de19bf4e63be2e6c97fa6c3c7357286c8540c->leave($__internal_4ffe0eaffc4a3f6112379113080de19bf4e63be2e6c97fa6c3c7357286c8540c_prof);

    }

    public function getTemplateName()
    {
        return "album/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 20,  64 => 17,  57 => 13,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
        <section>
            <h1>Album edit</h1>
                <div class=\"tbl-header\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">

            {{ form_start(edit_form) }}
                {{ form_widget(edit_form) }}
                <input type=\"submit\" value=\"Edit\" />
            {{ form_end(edit_form) }}

            <ul>
                <li>
                    <a href=\"{{ path('album_index') }}\">Back to the list</a>
                </li>
                <li>
                    {{ form_start(delete_form) }}
                        <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </li>
            </ul>
            </table>
            </div>
        </section>
    </div>

{% endblock %}
", "album/edit.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/edit.html.twig");
    }
}
