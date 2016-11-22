<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_94c2676d91e95679c650c299a70d04a6496ca6a7cef81e06b760ba228623447f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_39d9d009043ffa34c8178a0513a0fae1409a0cb1b1d8c2044aa178814357e67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d9d009043ffa34c8178a0513a0fae1409a0cb1b1d8c2044aa178814357e67f->enter($__internal_39d9d009043ffa34c8178a0513a0fae1409a0cb1b1d8c2044aa178814357e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d9d009043ffa34c8178a0513a0fae1409a0cb1b1d8c2044aa178814357e67f->leave($__internal_39d9d009043ffa34c8178a0513a0fae1409a0cb1b1d8c2044aa178814357e67f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_265467bbaecd1e3549cf94427bb7393d384ddc6001b2398b5715f30ed26416ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265467bbaecd1e3549cf94427bb7393d384ddc6001b2398b5715f30ed26416ee->enter($__internal_265467bbaecd1e3549cf94427bb7393d384ddc6001b2398b5715f30ed26416ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_265467bbaecd1e3549cf94427bb7393d384ddc6001b2398b5715f30ed26416ee->leave($__internal_265467bbaecd1e3549cf94427bb7393d384ddc6001b2398b5715f30ed26416ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36ec1409464ae2700294e9e45bf584c706ac8c16d0c18759fac557b43fea9465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ec1409464ae2700294e9e45bf584c706ac8c16d0c18759fac557b43fea9465->enter($__internal_36ec1409464ae2700294e9e45bf584c706ac8c16d0c18759fac557b43fea9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36ec1409464ae2700294e9e45bf584c706ac8c16d0c18759fac557b43fea9465->leave($__internal_36ec1409464ae2700294e9e45bf584c706ac8c16d0c18759fac557b43fea9465_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d830c99b9591075da8de2ebd12ed70984e595d4620cabbf8b64c47b02f113e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d830c99b9591075da8de2ebd12ed70984e595d4620cabbf8b64c47b02f113e57->enter($__internal_d830c99b9591075da8de2ebd12ed70984e595d4620cabbf8b64c47b02f113e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d830c99b9591075da8de2ebd12ed70984e595d4620cabbf8b64c47b02f113e57->leave($__internal_d830c99b9591075da8de2ebd12ed70984e595d4620cabbf8b64c47b02f113e57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
