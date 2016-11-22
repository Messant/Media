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
        $__internal_04dcceaa5d071254b516a3b67f6dd051f3fa67881dc29d9dd38e826728bcdb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dcceaa5d071254b516a3b67f6dd051f3fa67881dc29d9dd38e826728bcdb44->enter($__internal_04dcceaa5d071254b516a3b67f6dd051f3fa67881dc29d9dd38e826728bcdb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04dcceaa5d071254b516a3b67f6dd051f3fa67881dc29d9dd38e826728bcdb44->leave($__internal_04dcceaa5d071254b516a3b67f6dd051f3fa67881dc29d9dd38e826728bcdb44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e886153f021305d109718dca5484fe2dcc03dade74c64ef23ebe12413134c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e886153f021305d109718dca5484fe2dcc03dade74c64ef23ebe12413134c93->enter($__internal_1e886153f021305d109718dca5484fe2dcc03dade74c64ef23ebe12413134c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <h3>Votre commentaire a été créé avec succès.</h3>
    </section>
</main>
";
        
        $__internal_1e886153f021305d109718dca5484fe2dcc03dade74c64ef23ebe12413134c93->leave($__internal_1e886153f021305d109718dca5484fe2dcc03dade74c64ef23ebe12413134c93_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5e88be0ebf727bff6ce3003b2c6033b9ef32c8ca1cdeff33359a06b45df1df1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e88be0ebf727bff6ce3003b2c6033b9ef32c8ca1cdeff33359a06b45df1df1e->enter($__internal_5e88be0ebf727bff6ce3003b2c6033b9ef32c8ca1cdeff33359a06b45df1df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "        <script>
            \$('button').click(function(e) {
                e.preventDefault();
                \$('main').addClass('flip');
            });
        </script>
    ";
        
        $__internal_5e88be0ebf727bff6ce3003b2c6033b9ef32c8ca1cdeff33359a06b45df1df1e->leave($__internal_5e88be0ebf727bff6ce3003b2c6033b9ef32c8ca1cdeff33359a06b45df1df1e_prof);

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
        <h3>Votre commentaire a été créé avec succès.</h3>
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
