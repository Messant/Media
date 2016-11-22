<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c579aa223c40fb63aec78a60a75db13618fac16f562672bb2e599077d89fd96a extends Twig_Template
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
        $__internal_641b3a284e87e93109885a28cf55dc513e9ea442e458f41a9d0a6e6bd699ae89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641b3a284e87e93109885a28cf55dc513e9ea442e458f41a9d0a6e6bd699ae89->enter($__internal_641b3a284e87e93109885a28cf55dc513e9ea442e458f41a9d0a6e6bd699ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_641b3a284e87e93109885a28cf55dc513e9ea442e458f41a9d0a6e6bd699ae89->leave($__internal_641b3a284e87e93109885a28cf55dc513e9ea442e458f41a9d0a6e6bd699ae89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
