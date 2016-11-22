<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4d6b5edd65525bb60cf3a0c2e98f8614ccb684d4bdd89100137f75267836be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0faaf84991e68b388b4b8c37c9f29b3fa8c7d4e4ad6d6f4c5865462a095b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0faaf84991e68b388b4b8c37c9f29b3fa8c7d4e4ad6d6f4c5865462a095b9a->enter($__internal_8a0faaf84991e68b388b4b8c37c9f29b3fa8c7d4e4ad6d6f4c5865462a095b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8a0faaf84991e68b388b4b8c37c9f29b3fa8c7d4e4ad6d6f4c5865462a095b9a->leave($__internal_8a0faaf84991e68b388b4b8c37c9f29b3fa8c7d4e4ad6d6f4c5865462a095b9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
