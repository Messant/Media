<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_42fd4320e05e62abefc6483623ff1c242598e6651d25efa27d599aa8a97582da extends Twig_Template
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
        $__internal_855a9286ddc9013c8c31514f0843e18c54b00e1616353bd80d164dc7d1e06eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855a9286ddc9013c8c31514f0843e18c54b00e1616353bd80d164dc7d1e06eb6->enter($__internal_855a9286ddc9013c8c31514f0843e18c54b00e1616353bd80d164dc7d1e06eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_855a9286ddc9013c8c31514f0843e18c54b00e1616353bd80d164dc7d1e06eb6->leave($__internal_855a9286ddc9013c8c31514f0843e18c54b00e1616353bd80d164dc7d1e06eb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
