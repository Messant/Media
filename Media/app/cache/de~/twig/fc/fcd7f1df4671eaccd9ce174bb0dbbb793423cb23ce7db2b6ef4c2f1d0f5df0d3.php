<?php

/* MediaBundle:Default:index.html.twig */
class __TwigTemplate_7dcb51323da3cecb243f3a4021b6ae946b6ade67d009d4caf5bfcab34231005c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e672e42175c3abd226a8877fff903a92068f20779036fff6372bf9027fd2983c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e672e42175c3abd226a8877fff903a92068f20779036fff6372bf9027fd2983c->enter($__internal_e672e42175c3abd226a8877fff903a92068f20779036fff6372bf9027fd2983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e672e42175c3abd226a8877fff903a92068f20779036fff6372bf9027fd2983c->leave($__internal_e672e42175c3abd226a8877fff903a92068f20779036fff6372bf9027fd2983c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d8fdaf93314346114fb317aa7fb271dec14292d8739d77b6b023a0cb82240a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8fdaf93314346114fb317aa7fb271dec14292d8739d77b6b023a0cb82240a6->enter($__internal_5d8fdaf93314346114fb317aa7fb271dec14292d8739d77b6b023a0cb82240a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<main>
    <form>
        <hgroup>
            <h2>Formulaire</h2>
        </hgroup>

        <fieldset>
            <input type=\"text\" placeholder=\"Commentaire\" required>


        </fieldset>

        <button>Go !</button>
    </form>

    <section>
        <h2>Merci!</h2>
        <br>
        <h3>Votre compte a été créé avec succès.</h3>
    </section>
</main>
";
        
        $__internal_5d8fdaf93314346114fb317aa7fb271dec14292d8739d77b6b023a0cb82240a6->leave($__internal_5d8fdaf93314346114fb317aa7fb271dec14292d8739d77b6b023a0cb82240a6_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_10f376320d318eb3c81a4527e0e7d19bca66aa00233deb1c991b9ade467a65e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f376320d318eb3c81a4527e0e7d19bca66aa00233deb1c991b9ade467a65e0->enter($__internal_10f376320d318eb3c81a4527e0e7d19bca66aa00233deb1c991b9ade467a65e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "        <script>
            \$('button').click(function(e) {
                e.preventDefault();
                \$('main').addClass('flip');
            });
        </script>
    ";
        
        $__internal_10f376320d318eb3c81a4527e0e7d19bca66aa00233deb1c991b9ade467a65e0->leave($__internal_10f376320d318eb3c81a4527e0e7d19bca66aa00233deb1c991b9ade467a65e0_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  69 => 27,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}

{% block body %}
<main>
    <form>
        <hgroup>
            <h2>Formulaire</h2>
        </hgroup>

        <fieldset>
            <input type=\"text\" placeholder=\"Commentaire\" required>


        </fieldset>

        <button>Go !</button>
    </form>

    <section>
        <h2>Merci!</h2>
        <br>
        <h3>Votre compte a été créé avec succès.</h3>
    </section>
</main>
{% endblock %}

    {% block javascript %}
        <script>
            \$('button').click(function(e) {
                e.preventDefault();
                \$('main').addClass('flip');
            });
        </script>
    {% endblock %}
", "MediaBundle:Default:index.html.twig", "/home/wilder4/Documents/Evaluation/src/MediaBundle/Resources/views/Default/index.html.twig");
    }
}
