<?php

/* MediaBundle::layout.html.twig */
class __TwigTemplate_8e2547d264d08636728283d22bebe078b9627bde72e195dcbdd3db775379d568 extends Twig_Template
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
        $__internal_c2699d3ebd1e71d0b1a4c7393ed07f34ca00cdc54523fcdde8ee95521484025a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2699d3ebd1e71d0b1a4c7393ed07f34ca00cdc54523fcdde8ee95521484025a->enter($__internal_c2699d3ebd1e71d0b1a4c7393ed07f34ca00cdc54523fcdde8ee95521484025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle::layout.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/front.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>

";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "</body>





</html>";
        
        $__internal_c2699d3ebd1e71d0b1a4c7393ed07f34ca00cdc54523fcdde8ee95521484025a->leave($__internal_c2699d3ebd1e71d0b1a4c7393ed07f34ca00cdc54523fcdde8ee95521484025a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a4a949a32c71ef15b23510e169a1a03aaa9ffb44ae343c097d8626159182b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4a949a32c71ef15b23510e169a1a03aaa9ffb44ae343c097d8626159182b40->enter($__internal_6a4a949a32c71ef15b23510e169a1a03aaa9ffb44ae343c097d8626159182b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluation";
        
        $__internal_6a4a949a32c71ef15b23510e169a1a03aaa9ffb44ae343c097d8626159182b40->leave($__internal_6a4a949a32c71ef15b23510e169a1a03aaa9ffb44ae343c097d8626159182b40_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4fba4126aefea2969dd81c0823bad0fdd1925481b5e24a20dd6ee9ca858fdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fba4126aefea2969dd81c0823bad0fdd1925481b5e24a20dd6ee9ca858fdb0->enter($__internal_f4fba4126aefea2969dd81c0823bad0fdd1925481b5e24a20dd6ee9ca858fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4fba4126aefea2969dd81c0823bad0fdd1925481b5e24a20dd6ee9ca858fdb0->leave($__internal_f4fba4126aefea2969dd81c0823bad0fdd1925481b5e24a20dd6ee9ca858fdb0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_da9c033b6eae945d72dbad21025d6f09b163230fc2d295fb87eaf1c3e6188e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9c033b6eae945d72dbad21025d6f09b163230fc2d295fb87eaf1c3e6188e7d->enter($__internal_da9c033b6eae945d72dbad21025d6f09b163230fc2d295fb87eaf1c3e6188e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da9c033b6eae945d72dbad21025d6f09b163230fc2d295fb87eaf1c3e6188e7d->leave($__internal_da9c033b6eae945d72dbad21025d6f09b163230fc2d295fb87eaf1c3e6188e7d_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fce977dddc1ead66416a40702c4d8c211f6c6ae82587f3b48f55029c09fb7f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce977dddc1ead66416a40702c4d8c211f6c6ae82587f3b48f55029c09fb7f11->enter($__internal_fce977dddc1ead66416a40702c4d8c211f6c6ae82587f3b48f55029c09fb7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fce977dddc1ead66416a40702c4d8c211f6c6ae82587f3b48f55029c09fb7f11->leave($__internal_fce977dddc1ead66416a40702c4d8c211f6c6ae82587f3b48f55029c09fb7f11_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 18,  118 => 17,  112 => 16,  101 => 14,  90 => 6,  78 => 5,  65 => 20,  63 => 16,  60 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <link href=\"{{ asset('css/front.css')}}\" rel=\"stylesheet\">
</head>
<body>

{% block body %}{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% endblock %}
</body>





</html>", "MediaBundle::layout.html.twig", "/home/wilder4/Documents/Evaluation/src/MediaBundle/Resources/views/layout.html.twig");
    }
}
