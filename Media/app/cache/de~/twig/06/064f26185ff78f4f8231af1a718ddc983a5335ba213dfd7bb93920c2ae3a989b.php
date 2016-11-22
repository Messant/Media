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
        $__internal_9164439f32b8db988bbfa53557b7646e4fe4156a86148eeaafcfb0a17bad78bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9164439f32b8db988bbfa53557b7646e4fe4156a86148eeaafcfb0a17bad78bf->enter($__internal_9164439f32b8db988bbfa53557b7646e4fe4156a86148eeaafcfb0a17bad78bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9164439f32b8db988bbfa53557b7646e4fe4156a86148eeaafcfb0a17bad78bf->leave($__internal_9164439f32b8db988bbfa53557b7646e4fe4156a86148eeaafcfb0a17bad78bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7a63352eca0cbb05641bd5fb0f07548f444d59637082ccbb5dd96fa09d33979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a63352eca0cbb05641bd5fb0f07548f444d59637082ccbb5dd96fa09d33979->enter($__internal_d7a63352eca0cbb05641bd5fb0f07548f444d59637082ccbb5dd96fa09d33979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluation";
        
        $__internal_d7a63352eca0cbb05641bd5fb0f07548f444d59637082ccbb5dd96fa09d33979->leave($__internal_d7a63352eca0cbb05641bd5fb0f07548f444d59637082ccbb5dd96fa09d33979_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de2e1973230458908360ffb7e399d5855873e2043fa198fc7348e6d8107836e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2e1973230458908360ffb7e399d5855873e2043fa198fc7348e6d8107836e5->enter($__internal_de2e1973230458908360ffb7e399d5855873e2043fa198fc7348e6d8107836e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_de2e1973230458908360ffb7e399d5855873e2043fa198fc7348e6d8107836e5->leave($__internal_de2e1973230458908360ffb7e399d5855873e2043fa198fc7348e6d8107836e5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5544d6a3b91e551be064ae9267953727cc5ae888f24c69878abd45c69b70cb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5544d6a3b91e551be064ae9267953727cc5ae888f24c69878abd45c69b70cb37->enter($__internal_5544d6a3b91e551be064ae9267953727cc5ae888f24c69878abd45c69b70cb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5544d6a3b91e551be064ae9267953727cc5ae888f24c69878abd45c69b70cb37->leave($__internal_5544d6a3b91e551be064ae9267953727cc5ae888f24c69878abd45c69b70cb37_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1ddb9e991a54eb28a45630021a321d2cded6c8bafc5c0011f06ec8ea274973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ddb9e991a54eb28a45630021a321d2cded6c8bafc5c0011f06ec8ea274973d->enter($__internal_b1ddb9e991a54eb28a45630021a321d2cded6c8bafc5c0011f06ec8ea274973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b1ddb9e991a54eb28a45630021a321d2cded6c8bafc5c0011f06ec8ea274973d->leave($__internal_b1ddb9e991a54eb28a45630021a321d2cded6c8bafc5c0011f06ec8ea274973d_prof);

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
