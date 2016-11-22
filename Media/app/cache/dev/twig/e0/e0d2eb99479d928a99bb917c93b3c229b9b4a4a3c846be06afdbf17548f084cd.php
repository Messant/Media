<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_fe54d974a48c7adc2bf0063f4109658c7d72e62e5f728bccced5ccff548cf998 extends Twig_Template
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
        $__internal_4a92e3ccb4c73e24767598923f256178021efa0429a2f46f940a078ad6ee77e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a92e3ccb4c73e24767598923f256178021efa0429a2f46f940a078ad6ee77e4->enter($__internal_4a92e3ccb4c73e24767598923f256178021efa0429a2f46f940a078ad6ee77e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4a92e3ccb4c73e24767598923f256178021efa0429a2f46f940a078ad6ee77e4->leave($__internal_4a92e3ccb4c73e24767598923f256178021efa0429a2f46f940a078ad6ee77e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
