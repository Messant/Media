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
        $__internal_4e29ee680033c4dd8d4fc041cc8fdc4381655f0215486028e124f66227213b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e29ee680033c4dd8d4fc041cc8fdc4381655f0215486028e124f66227213b59->enter($__internal_4e29ee680033c4dd8d4fc041cc8fdc4381655f0215486028e124f66227213b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e29ee680033c4dd8d4fc041cc8fdc4381655f0215486028e124f66227213b59->leave($__internal_4e29ee680033c4dd8d4fc041cc8fdc4381655f0215486028e124f66227213b59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12121172edda2330e05452b18e056580397c2255e6a3460ec41ddf96e6415025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12121172edda2330e05452b18e056580397c2255e6a3460ec41ddf96e6415025->enter($__internal_12121172edda2330e05452b18e056580397c2255e6a3460ec41ddf96e6415025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12121172edda2330e05452b18e056580397c2255e6a3460ec41ddf96e6415025->leave($__internal_12121172edda2330e05452b18e056580397c2255e6a3460ec41ddf96e6415025_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a20250e80d2ceed294238d7d61f7f7a65b8f806ca12735a5ac8526293fc765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a20250e80d2ceed294238d7d61f7f7a65b8f806ca12735a5ac8526293fc765->enter($__internal_39a20250e80d2ceed294238d7d61f7f7a65b8f806ca12735a5ac8526293fc765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39a20250e80d2ceed294238d7d61f7f7a65b8f806ca12735a5ac8526293fc765->leave($__internal_39a20250e80d2ceed294238d7d61f7f7a65b8f806ca12735a5ac8526293fc765_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0fcaca3a5a668aa7d1e2bc71bd72090f04c9da1db475972288d71b7dbf8846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0fcaca3a5a668aa7d1e2bc71bd72090f04c9da1db475972288d71b7dbf8846->enter($__internal_df0fcaca3a5a668aa7d1e2bc71bd72090f04c9da1db475972288d71b7dbf8846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df0fcaca3a5a668aa7d1e2bc71bd72090f04c9da1db475972288d71b7dbf8846->leave($__internal_df0fcaca3a5a668aa7d1e2bc71bd72090f04c9da1db475972288d71b7dbf8846_prof);

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
