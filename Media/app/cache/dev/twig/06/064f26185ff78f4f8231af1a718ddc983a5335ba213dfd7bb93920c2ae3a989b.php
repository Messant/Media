<?php

/* base.html.twig */
class __TwigTemplate_e114bc653df9f4b8eec800c7bd64646a810cb7d67eaf645349d06696b31c48f8 extends Twig_Template
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
        $__internal_40a33584bd344830659d061228548d18a4909d2bb750ef4e50f5f822492d7016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a33584bd344830659d061228548d18a4909d2bb750ef4e50f5f822492d7016->enter($__internal_40a33584bd344830659d061228548d18a4909d2bb750ef4e50f5f822492d7016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40a33584bd344830659d061228548d18a4909d2bb750ef4e50f5f822492d7016->leave($__internal_40a33584bd344830659d061228548d18a4909d2bb750ef4e50f5f822492d7016_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9531cbfc508db0583b48ca38942526115bcb78778bfcd5e234cf4f8f9c3254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9531cbfc508db0583b48ca38942526115bcb78778bfcd5e234cf4f8f9c3254->enter($__internal_1f9531cbfc508db0583b48ca38942526115bcb78778bfcd5e234cf4f8f9c3254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluation";
        
        $__internal_1f9531cbfc508db0583b48ca38942526115bcb78778bfcd5e234cf4f8f9c3254->leave($__internal_1f9531cbfc508db0583b48ca38942526115bcb78778bfcd5e234cf4f8f9c3254_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4f6fd7c6c2034541b7aeccc92bfebfba9da78731c24a72b335bf1e20d811a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f6fd7c6c2034541b7aeccc92bfebfba9da78731c24a72b335bf1e20d811a06->enter($__internal_d4f6fd7c6c2034541b7aeccc92bfebfba9da78731c24a72b335bf1e20d811a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4f6fd7c6c2034541b7aeccc92bfebfba9da78731c24a72b335bf1e20d811a06->leave($__internal_d4f6fd7c6c2034541b7aeccc92bfebfba9da78731c24a72b335bf1e20d811a06_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b36884e545125e333e9aa2748f3f988974e3686e4f52096e493d345380dedaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b36884e545125e333e9aa2748f3f988974e3686e4f52096e493d345380dedaa->enter($__internal_1b36884e545125e333e9aa2748f3f988974e3686e4f52096e493d345380dedaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b36884e545125e333e9aa2748f3f988974e3686e4f52096e493d345380dedaa->leave($__internal_1b36884e545125e333e9aa2748f3f988974e3686e4f52096e493d345380dedaa_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d501dad75d36f3ec7486d7bedd6f72bb5d941832fcc9b8f46bdc58f20dbca6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d501dad75d36f3ec7486d7bedd6f72bb5d941832fcc9b8f46bdc58f20dbca6a7->enter($__internal_d501dad75d36f3ec7486d7bedd6f72bb5d941832fcc9b8f46bdc58f20dbca6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d501dad75d36f3ec7486d7bedd6f72bb5d941832fcc9b8f46bdc58f20dbca6a7->leave($__internal_d501dad75d36f3ec7486d7bedd6f72bb5d941832fcc9b8f46bdc58f20dbca6a7_prof);

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
