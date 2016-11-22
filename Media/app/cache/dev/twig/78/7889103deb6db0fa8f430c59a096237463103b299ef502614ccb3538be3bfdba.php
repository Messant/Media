<?php

/* :album:new.html.twig */
class __TwigTemplate_79fa7594cd503d86a47e0d785931fb68af34608279066d02a3aa551aa425548b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":album:new.html.twig", 1);
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
        $__internal_d134a97e58cec0b66e38f2526f2b971227f6dcdc440c953aca42065ce3af9e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d134a97e58cec0b66e38f2526f2b971227f6dcdc440c953aca42065ce3af9e0c->enter($__internal_d134a97e58cec0b66e38f2526f2b971227f6dcdc440c953aca42065ce3af9e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":album:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d134a97e58cec0b66e38f2526f2b971227f6dcdc440c953aca42065ce3af9e0c->leave($__internal_d134a97e58cec0b66e38f2526f2b971227f6dcdc440c953aca42065ce3af9e0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b16c942a93e35edc495f7ffaa4172b814cc9b514bd181d2c6e76722cff591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b16c942a93e35edc495f7ffaa4172b814cc9b514bd181d2c6e76722cff591d->enter($__internal_60b16c942a93e35edc495f7ffaa4172b814cc9b514bd181d2c6e76722cff591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60b16c942a93e35edc495f7ffaa4172b814cc9b514bd181d2c6e76722cff591d->leave($__internal_60b16c942a93e35edc495f7ffaa4172b814cc9b514bd181d2c6e76722cff591d_prof);

    }

    public function getTemplateName()
    {
        return ":album:new.html.twig";
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
", ":album:new.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/new.html.twig");
    }
}
