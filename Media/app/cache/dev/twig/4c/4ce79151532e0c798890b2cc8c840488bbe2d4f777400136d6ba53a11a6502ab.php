<?php

/* MediaBundle::layout.html.twig */
class __TwigTemplate_4dd37dcd00dff44b014f40c0e9f6fd5c1c6914daeab1fc5e470e500922d49b69 extends Twig_Template
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
        $__internal_ed40d5d52435e794ac1106cb58611461b5745ac1355afa6c60613610dde6c57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed40d5d52435e794ac1106cb58611461b5745ac1355afa6c60613610dde6c57c->enter($__internal_ed40d5d52435e794ac1106cb58611461b5745ac1355afa6c60613610dde6c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle::layout.html.twig"));

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
        
        $__internal_ed40d5d52435e794ac1106cb58611461b5745ac1355afa6c60613610dde6c57c->leave($__internal_ed40d5d52435e794ac1106cb58611461b5745ac1355afa6c60613610dde6c57c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30e9cdbbbc068eec9131e973d1310ef62b56958d908e6f9f8a238d0aa0df0717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e9cdbbbc068eec9131e973d1310ef62b56958d908e6f9f8a238d0aa0df0717->enter($__internal_30e9cdbbbc068eec9131e973d1310ef62b56958d908e6f9f8a238d0aa0df0717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evaluation";
        
        $__internal_30e9cdbbbc068eec9131e973d1310ef62b56958d908e6f9f8a238d0aa0df0717->leave($__internal_30e9cdbbbc068eec9131e973d1310ef62b56958d908e6f9f8a238d0aa0df0717_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1c10ba10cba5fc6547e090123a9d64ea4abd8946644e46ffd5831f60579da6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c10ba10cba5fc6547e090123a9d64ea4abd8946644e46ffd5831f60579da6f->enter($__internal_c1c10ba10cba5fc6547e090123a9d64ea4abd8946644e46ffd5831f60579da6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c1c10ba10cba5fc6547e090123a9d64ea4abd8946644e46ffd5831f60579da6f->leave($__internal_c1c10ba10cba5fc6547e090123a9d64ea4abd8946644e46ffd5831f60579da6f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_026ef20354899f9a73ea3e60474c42dbf881a4b83b95bcc085c11c5b6190b4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026ef20354899f9a73ea3e60474c42dbf881a4b83b95bcc085c11c5b6190b4fd->enter($__internal_026ef20354899f9a73ea3e60474c42dbf881a4b83b95bcc085c11c5b6190b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_026ef20354899f9a73ea3e60474c42dbf881a4b83b95bcc085c11c5b6190b4fd->leave($__internal_026ef20354899f9a73ea3e60474c42dbf881a4b83b95bcc085c11c5b6190b4fd_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad6828462845820f628e3892b364e08fcc77b50066b1afec28728231a78eec9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6828462845820f628e3892b364e08fcc77b50066b1afec28728231a78eec9b->enter($__internal_ad6828462845820f628e3892b364e08fcc77b50066b1afec28728231a78eec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ad6828462845820f628e3892b364e08fcc77b50066b1afec28728231a78eec9b->leave($__internal_ad6828462845820f628e3892b364e08fcc77b50066b1afec28728231a78eec9b_prof);

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
