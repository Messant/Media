<?php

/* :commentaire:index.html.twig */
class __TwigTemplate_570e803296385f00b2e275dc757d97074ee3cde4d64a48f838901f799b17422c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaire:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_213ca4bed207fdd28a62376ee5006d0ef43a818eaf362fbca72a4758f940e161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213ca4bed207fdd28a62376ee5006d0ef43a818eaf362fbca72a4758f940e161->enter($__internal_213ca4bed207fdd28a62376ee5006d0ef43a818eaf362fbca72a4758f940e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213ca4bed207fdd28a62376ee5006d0ef43a818eaf362fbca72a4758f940e161->leave($__internal_213ca4bed207fdd28a62376ee5006d0ef43a818eaf362fbca72a4758f940e161_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f9f392a71a724644497c2065f1cfdaec5df2141835a3026d652e26eaf3b2aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9f392a71a724644497c2065f1cfdaec5df2141835a3026d652e26eaf3b2aa8->enter($__internal_4f9f392a71a724644497c2065f1cfdaec5df2141835a3026d652e26eaf3b2aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Utilisateur</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "utilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "commentaire", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_show", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_edit", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_new");
        echo "\">Create a new commentaire</a>
        </li>
    </ul>
";
        
        $__internal_4f9f392a71a724644497c2065f1cfdaec5df2141835a3026d652e26eaf3b2aa8->leave($__internal_4f9f392a71a724644497c2065f1cfdaec5df2141835a3026d652e26eaf3b2aa8_prof);

    }

    public function getTemplateName()
    {
        return ":commentaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Commentaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Utilisateur</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for commentaire in commentaires %}
            <tr>
                <td><a href=\"{{ path('commentaire_show', { 'id': commentaire.id }) }}\">{{ commentaire.id }}</a></td>
                <td>{{ commentaire.utilisateur }}</td>
                <td>{{ commentaire.commentaire }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('commentaire_show', { 'id': commentaire.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('commentaire_edit', { 'id': commentaire.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('commentaire_new') }}\">Create a new commentaire</a>
        </li>
    </ul>
{% endblock %}
", ":commentaire:index.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/commentaire/index.html.twig");
    }
}
