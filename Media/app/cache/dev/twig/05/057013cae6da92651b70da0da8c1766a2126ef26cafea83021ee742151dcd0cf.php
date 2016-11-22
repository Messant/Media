<?php

/* :album:show.html.twig */
class __TwigTemplate_dc99bc497ba8028d7affb0da6641ba009cbb2197c01e6f4e6091ec3044d9b964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":album:show.html.twig", 1);
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
        $__internal_540872b601352f6dce35abc4625ba7a4f981f814adaf32e2655b3ef848b565e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540872b601352f6dce35abc4625ba7a4f981f814adaf32e2655b3ef848b565e3->enter($__internal_540872b601352f6dce35abc4625ba7a4f981f814adaf32e2655b3ef848b565e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":album:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540872b601352f6dce35abc4625ba7a4f981f814adaf32e2655b3ef848b565e3->leave($__internal_540872b601352f6dce35abc4625ba7a4f981f814adaf32e2655b3ef848b565e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_426f9e8799144ac4463e6c1fb3b40f9ef6996dcc094ba70e7ce665d9f205e08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426f9e8799144ac4463e6c1fb3b40f9ef6996dcc094ba70e7ce665d9f205e08d->enter($__internal_426f9e8799144ac4463e6c1fb3b40f9ef6996dcc094ba70e7ce665d9f205e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Album</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titrealbum</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "titreAlbum", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Artiste</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "artiste", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "genre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Support</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "support", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


            <a class=\"btn\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_index");
        echo "\">Back to the list</a>

            <a class=\"btn\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_edit", array("id" => $this->getAttribute(($context["album"] ?? $this->getContext($context, "album")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_426f9e8799144ac4463e6c1fb3b40f9ef6996dcc094ba70e7ce665d9f205e08d->leave($__internal_426f9e8799144ac4463e6c1fb3b40f9ef6996dcc094ba70e7ce665d9f205e08d_prof);

    }

    public function getTemplateName()
    {
        return ":album:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 36,  90 => 34,  85 => 32,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Album</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ album.id }}</td>
            </tr>
            <tr>
                <th>Titrealbum</th>
                <td>{{ album.titreAlbum }}</td>
            </tr>
            <tr>
                <th>Artiste</th>
                <td>{{ album.artiste }}</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>{{ album.genre }}</td>
            </tr>
            <tr>
                <th>Support</th>
                <td>{{ album.support }}</td>
            </tr>
        </tbody>
    </table>


            <a class=\"btn\" href=\"{{ path('album_index') }}\">Back to the list</a>

            <a class=\"btn\" href=\"{{ path('album_edit', { 'id': album.id }) }}\">Edit</a>

            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}

{% endblock %}
", ":album:show.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/show.html.twig");
    }
}
