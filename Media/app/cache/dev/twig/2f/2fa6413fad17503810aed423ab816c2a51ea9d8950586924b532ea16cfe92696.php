<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_56ca088f85307dc3f00474f603b8c143a52c997dff26ddeb24987df8dc25729a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4ca15e7395f7682357a28f065cf343e96aa24ffc280b0b3335d36f1263823e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca15e7395f7682357a28f065cf343e96aa24ffc280b0b3335d36f1263823e22->enter($__internal_4ca15e7395f7682357a28f065cf343e96aa24ffc280b0b3335d36f1263823e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca15e7395f7682357a28f065cf343e96aa24ffc280b0b3335d36f1263823e22->leave($__internal_4ca15e7395f7682357a28f065cf343e96aa24ffc280b0b3335d36f1263823e22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_649a2e7782c01de8c57177d5fc73d7d5234b2f630f6c493b14ca2e1c05709eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649a2e7782c01de8c57177d5fc73d7d5234b2f630f6c493b14ca2e1c05709eab->enter($__internal_649a2e7782c01de8c57177d5fc73d7d5234b2f630f6c493b14ca2e1c05709eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_649a2e7782c01de8c57177d5fc73d7d5234b2f630f6c493b14ca2e1c05709eab->leave($__internal_649a2e7782c01de8c57177d5fc73d7d5234b2f630f6c493b14ca2e1c05709eab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a0ebb88dc20292634afd413a414c59ee6e628c377dd9196522f81dd4f657f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ebb88dc20292634afd413a414c59ee6e628c377dd9196522f81dd4f657f14->enter($__internal_4a0ebb88dc20292634afd413a414c59ee6e628c377dd9196522f81dd4f657f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a0ebb88dc20292634afd413a414c59ee6e628c377dd9196522f81dd4f657f14->leave($__internal_4a0ebb88dc20292634afd413a414c59ee6e628c377dd9196522f81dd4f657f14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca04a7996a5e75dd262ce482c0a559ad69b7db06215407a9ab1ddb24292d80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca04a7996a5e75dd262ce482c0a559ad69b7db06215407a9ab1ddb24292d80b->enter($__internal_1ca04a7996a5e75dd262ce482c0a559ad69b7db06215407a9ab1ddb24292d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ca04a7996a5e75dd262ce482c0a559ad69b7db06215407a9ab1ddb24292d80b->leave($__internal_1ca04a7996a5e75dd262ce482c0a559ad69b7db06215407a9ab1ddb24292d80b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
