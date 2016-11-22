<?php

/* base.html.twig */
class __TwigTemplate_a6de90c4f789709749d705cdcc0a33f65d588df5a339cf2542909c6d268afd0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9550fe2807cae3c1b2268db4294bdf7cd3b9457b85a93eb901c216df89f291ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9550fe2807cae3c1b2268db4294bdf7cd3b9457b85a93eb901c216df89f291ae->enter($__internal_9550fe2807cae3c1b2268db4294bdf7cd3b9457b85a93eb901c216df89f291ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/media.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>

</html>
";
        
        $__internal_9550fe2807cae3c1b2268db4294bdf7cd3b9457b85a93eb901c216df89f291ae->leave($__internal_9550fe2807cae3c1b2268db4294bdf7cd3b9457b85a93eb901c216df89f291ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd144882c4cece4b9aaef2f44bd98849aba17b6bf1918895358e2b1ee14857a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd144882c4cece4b9aaef2f44bd98849aba17b6bf1918895358e2b1ee14857a->enter($__internal_edd144882c4cece4b9aaef2f44bd98849aba17b6bf1918895358e2b1ee14857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluation";
        
        $__internal_edd144882c4cece4b9aaef2f44bd98849aba17b6bf1918895358e2b1ee14857a->leave($__internal_edd144882c4cece4b9aaef2f44bd98849aba17b6bf1918895358e2b1ee14857a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca62a3dafc29811a1f7445b164af1ecf68badae2360e6bcb627efb4f74a3f872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca62a3dafc29811a1f7445b164af1ecf68badae2360e6bcb627efb4f74a3f872->enter($__internal_ca62a3dafc29811a1f7445b164af1ecf68badae2360e6bcb627efb4f74a3f872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca62a3dafc29811a1f7445b164af1ecf68badae2360e6bcb627efb4f74a3f872->leave($__internal_ca62a3dafc29811a1f7445b164af1ecf68badae2360e6bcb627efb4f74a3f872_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf6dd60b3fa72cbfc7b139b739ee244a35494068044fd92946a4eb1e94cc819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf6dd60b3fa72cbfc7b139b739ee244a35494068044fd92946a4eb1e94cc819->enter($__internal_fcf6dd60b3fa72cbfc7b139b739ee244a35494068044fd92946a4eb1e94cc819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcf6dd60b3fa72cbfc7b139b739ee244a35494068044fd92946a4eb1e94cc819->leave($__internal_fcf6dd60b3fa72cbfc7b139b739ee244a35494068044fd92946a4eb1e94cc819_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecced8990a7e3f9597e164ea3b7cd8b91cf83e535b1ce66d602a31b6d219318d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecced8990a7e3f9597e164ea3b7cd8b91cf83e535b1ce66d602a31b6d219318d->enter($__internal_ecced8990a7e3f9597e164ea3b7cd8b91cf83e535b1ce66d602a31b6d219318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ecced8990a7e3f9597e164ea3b7cd8b91cf83e535b1ce66d602a31b6d219318d->leave($__internal_ecced8990a7e3f9597e164ea3b7cd8b91cf83e535b1ce66d602a31b6d219318d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 16,  112 => 15,  106 => 14,  95 => 13,  84 => 6,  72 => 5,  62 => 18,  59 => 14,  57 => 13,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Evaluation{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/media.css')}}\" rel=\"stylesheet\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        {% endblock %}
    </body>

</html>
", "base.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/base.html.twig");
    }
}
