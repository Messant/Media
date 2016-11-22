<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d892ff1d67fc446f4280599a8077805531a28531d8f891580b86cb353234e837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5b463d7856b47cc9def8c1ce8b14ef0a6f63058da4f7adcb839fc5e70fa6918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b463d7856b47cc9def8c1ce8b14ef0a6f63058da4f7adcb839fc5e70fa6918->enter($__internal_c5b463d7856b47cc9def8c1ce8b14ef0a6f63058da4f7adcb839fc5e70fa6918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c5b463d7856b47cc9def8c1ce8b14ef0a6f63058da4f7adcb839fc5e70fa6918->leave($__internal_c5b463d7856b47cc9def8c1ce8b14ef0a6f63058da4f7adcb839fc5e70fa6918_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3af2b4f8b842008c24fb40cafa4c741849336dd4dc4455486c492f0b7815e1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af2b4f8b842008c24fb40cafa4c741849336dd4dc4455486c492f0b7815e1ce->enter($__internal_3af2b4f8b842008c24fb40cafa4c741849336dd4dc4455486c492f0b7815e1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3af2b4f8b842008c24fb40cafa4c741849336dd4dc4455486c492f0b7815e1ce->leave($__internal_3af2b4f8b842008c24fb40cafa4c741849336dd4dc4455486c492f0b7815e1ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
