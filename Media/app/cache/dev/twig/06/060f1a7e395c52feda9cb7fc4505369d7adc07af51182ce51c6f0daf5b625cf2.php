<?php

/* :commentaire:show.html.twig */
class __TwigTemplate_3bfdee3d0d1177bfcbe4613cae4ae93beb544067d70a48cc7bf7e4578945d1d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commentaire:show.html.twig", 1);
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
        $__internal_c316cf5c477a46c0fbcd225ff8833681efe574acde227101dcf9c25b56270b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c316cf5c477a46c0fbcd225ff8833681efe574acde227101dcf9c25b56270b2e->enter($__internal_c316cf5c477a46c0fbcd225ff8833681efe574acde227101dcf9c25b56270b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":commentaire:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c316cf5c477a46c0fbcd225ff8833681efe574acde227101dcf9c25b56270b2e->leave($__internal_c316cf5c477a46c0fbcd225ff8833681efe574acde227101dcf9c25b56270b2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b95eb46be49372f6b73e7e268f283edea26582b436f749c7702ae768c652ff50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95eb46be49372f6b73e7e268f283edea26582b436f749c7702ae768c652ff50->enter($__internal_b95eb46be49372f6b73e7e268f283edea26582b436f749c7702ae768c652ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Commentaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "utilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire_edit", array("id" => $this->getAttribute(($context["commentaire"] ?? $this->getContext($context, "commentaire")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b95eb46be49372f6b73e7e268f283edea26582b436f749c7702ae768c652ff50->leave($__internal_b95eb46be49372f6b73e7e268f283edea26582b436f749c7702ae768c652ff50_prof);

    }

    public function getTemplateName()
    {
        return ":commentaire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Commentaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ commentaire.id }}</td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>{{ commentaire.utilisateur }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ commentaire.commentaire }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('commentaire_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('commentaire_edit', { 'id': commentaire.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":commentaire:show.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/commentaire/show.html.twig");
    }
}
