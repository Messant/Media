<?php

/* album/index.html.twig */
class __TwigTemplate_ab3899bfac1ae2c3d197642036881df9958f88c6a7cd7542ab238dbbc6ff3cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "album/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javacript' => array($this, 'block_javacript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54bcaf46ef9dfc295631545e6aa4ec9bb75cd379e128b664c323b6ac2267a8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bcaf46ef9dfc295631545e6aa4ec9bb75cd379e128b664c323b6ac2267a8e2->enter($__internal_54bcaf46ef9dfc295631545e6aa4ec9bb75cd379e128b664c323b6ac2267a8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54bcaf46ef9dfc295631545e6aa4ec9bb75cd379e128b664c323b6ac2267a8e2->leave($__internal_54bcaf46ef9dfc295631545e6aa4ec9bb75cd379e128b664c323b6ac2267a8e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4531c17b2dbffb793a403ce442fc002890706cd92bb4943b966eadc007e89d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4531c17b2dbffb793a403ce442fc002890706cd92bb4943b966eadc007e89d4c->enter($__internal_4531c17b2dbffb793a403ce442fc002890706cd92bb4943b966eadc007e89d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <section>
                <h1>Albums</h1>
        <div class=\"tbl-header\">
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">

        <thead>
            <tr>
                <th>Id</th>
                <th>Titrealbum</th>
                <th>Artiste</th>
                <th>Genre</th>
                <th>Support</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
                </table>
            </div>
        <tbody>
        <div class=\"tbl-content\">
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["albums"] ?? $this->getContext($context, "albums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_show", array("id" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "titreAlbum", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "artiste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "support", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["album"], "commentaire", array()), "commentaires", array()), "html", null, true);
            echo "</td>

                <td>

                            <a class=\"btn\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_show", array("id" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
            echo "\">show</a>

                            <a class=\"btn\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_edit", array("id" => $this->getAttribute($context["album"], "id", array()))), "html", null, true);
            echo "\">edit</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </table>
        </div>
        </tbody>

    </table>




        </form>

    </section>
        <div class=\"button\">
            <a class=\"btn\" href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("album_new");
        echo "\">Create a new album</a>
        </div>
    </div>
";
        
        $__internal_4531c17b2dbffb793a403ce442fc002890706cd92bb4943b966eadc007e89d4c->leave($__internal_4531c17b2dbffb793a403ce442fc002890706cd92bb4943b966eadc007e89d4c_prof);

    }

    // line 63
    public function block_javacript($context, array $blocks = array())
    {
        $__internal_a8e7f952598870dbf484271e01e5724a7e381a0a11f9c30055241d8418accce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e7f952598870dbf484271e01e5724a7e381a0a11f9c30055241d8418accce1->enter($__internal_a8e7f952598870dbf484271e01e5724a7e381a0a11f9c30055241d8418accce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javacript"));

        // line 64
        echo "<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    \$(window).on(\"load resize \", function() {
        var scrollWidth = \$('.tbl-content').width() - \$('.tbl-content table').width();
        \$('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
</script>
";
        
        $__internal_a8e7f952598870dbf484271e01e5724a7e381a0a11f9c30055241d8418accce1->leave($__internal_a8e7f952598870dbf484271e01e5724a7e381a0a11f9c30055241d8418accce1_prof);

    }

    public function getTemplateName()
    {
        return "album/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 64,  143 => 63,  132 => 57,  117 => 44,  106 => 39,  101 => 37,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  72 => 28,  69 => 27,  65 => 26,  41 => 4,  35 => 3,  11 => 1,);
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
    <div class=\"container\">
    <section>
                <h1>Albums</h1>
        <div class=\"tbl-header\">
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">

        <thead>
            <tr>
                <th>Id</th>
                <th>Titrealbum</th>
                <th>Artiste</th>
                <th>Genre</th>
                <th>Support</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
                </table>
            </div>
        <tbody>
        <div class=\"tbl-content\">
            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
        {% for album in albums %}
            <tr>
                <td><a href=\"{{ path('album_show', { 'id': album.id }) }}\">{{ album.id }}</a></td>
                <td>{{ album.titreAlbum }}</td>
                <td>{{ album.artiste }}</td>
                <td>{{ album.genre}}</td>
                <td>{{ album.support }}</td>
                <td>{{ album.commentaire.commentaires }}</td>

                <td>

                            <a class=\"btn\" href=\"{{ path('album_show', { 'id': album.id }) }}\">show</a>

                            <a class=\"btn\" href=\"{{ path('album_edit', { 'id': album.id }) }}\">edit</a>

                </td>
            </tr>
        {% endfor %}
            </table>
        </div>
        </tbody>

    </table>




        </form>

    </section>
        <div class=\"button\">
            <a class=\"btn\" href=\"{{ path('album_new') }}\">Create a new album</a>
        </div>
    </div>
{% endblock %}


{% block javacript %}
<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    \$(window).on(\"load resize \", function() {
        var scrollWidth = \$('.tbl-content').width() - \$('.tbl-content table').width();
        \$('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
</script>
{% endblock %}", "album/index.html.twig", "/home/wilder4/Documents/Evaluation/app/Resources/views/album/index.html.twig");
    }
}
