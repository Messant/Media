<?php

/* album/show.html.twig */
class __TwigTemplate_2b3af83126cc7ceaeac394269daa0768052c6a7e9d1eddb2f14d3d2d20aebc01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "album/show.html.twig", 1);
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
        $__internal_039c3db68c8b4a0c07b13deb360c6e273d7879dc864833ae41457dbb940b06c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039c3db68c8b4a0c07b13deb360c6e273d7879dc864833ae41457dbb940b06c0->enter($__internal_039c3db68c8b4a0c07b13deb360c6e273d7879dc864833ae41457dbb940b06c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039c3db68c8b4a0c07b13deb360c6e273d7879dc864833ae41457dbb940b06c0->leave($__internal_039c3db68c8b4a0c07b13deb360c6e273d7879dc864833ae41457dbb940b06c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_450aafa4b223ae91f6695cd099b259a9475f72085e3d0a2a1728c08ee1a56903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450aafa4b223ae91f6695cd099b259a9475f72085e3d0a2a1728c08ee1a56903->enter($__internal_450aafa4b223ae91f6695cd099b259a9475f72085e3d0a2a1728c08ee1a56903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_450aafa4b223ae91f6695cd099b259a9475f72085e3d0a2a1728c08ee1a56903->leave($__internal_450aafa4b223ae91f6695cd099b259a9475f72085e3d0a2a1728c08ee1a56903_prof);

    }

    public function getTemplateName()
    {
        return "album/show.html.twig";
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
", "album/show.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/show.html.twig");
    }
}
