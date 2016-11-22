<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ebd81e2bcdff00ba1a98a52b380585fb2c6e1db124db9fa56131c6acd1214641 extends Twig_Template
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
        $__internal_e10d16cf88b83a247a149eca6b16ed0837d4fc48f6d932d2f67997dd06a9508b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10d16cf88b83a247a149eca6b16ed0837d4fc48f6d932d2f67997dd06a9508b->enter($__internal_e10d16cf88b83a247a149eca6b16ed0837d4fc48f6d932d2f67997dd06a9508b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e10d16cf88b83a247a149eca6b16ed0837d4fc48f6d932d2f67997dd06a9508b->leave($__internal_e10d16cf88b83a247a149eca6b16ed0837d4fc48f6d932d2f67997dd06a9508b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
