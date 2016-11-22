<?php

/* MediaBundle:Default:index.html.twig */
class __TwigTemplate_f7cac3d27b96a08e7c2b27a2a89a2221863c8cc279d19e48c3e641151e72c1c0 extends Twig_Template
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
        $__internal_996de55d7389a6c84f06127c5c82f7a74ce801d7244e3cd9b733b607588e9d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996de55d7389a6c84f06127c5c82f7a74ce801d7244e3cd9b733b607588e9d33->enter($__internal_996de55d7389a6c84f06127c5c82f7a74ce801d7244e3cd9b733b607588e9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996de55d7389a6c84f06127c5c82f7a74ce801d7244e3cd9b733b607588e9d33->leave($__internal_996de55d7389a6c84f06127c5c82f7a74ce801d7244e3cd9b733b607588e9d33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_282c6096727d7b2d2ee2b0b6f55453ac9fed5b26932469a474fafcf2795467c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282c6096727d7b2d2ee2b0b6f55453ac9fed5b26932469a474fafcf2795467c1->enter($__internal_282c6096727d7b2d2ee2b0b6f55453ac9fed5b26932469a474fafcf2795467c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_282c6096727d7b2d2ee2b0b6f55453ac9fed5b26932469a474fafcf2795467c1->leave($__internal_282c6096727d7b2d2ee2b0b6f55453ac9fed5b26932469a474fafcf2795467c1_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_46df83b0bf021ebc7c8f2b1a9ad83d017c1a3e2589e2c70114ad69da81ccd8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46df83b0bf021ebc7c8f2b1a9ad83d017c1a3e2589e2c70114ad69da81ccd8ef->enter($__internal_46df83b0bf021ebc7c8f2b1a9ad83d017c1a3e2589e2c70114ad69da81ccd8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "        <script>
            \$('button').click(function(e) {
                e.preventDefault();
                \$('main').addClass('flip');
            });
        </script>
    ";
        
        $__internal_46df83b0bf021ebc7c8f2b1a9ad83d017c1a3e2589e2c70114ad69da81ccd8ef->leave($__internal_46df83b0bf021ebc7c8f2b1a9ad83d017c1a3e2589e2c70114ad69da81ccd8ef_prof);

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
