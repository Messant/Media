<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6a395372c66bb5d7048113c6320f1311abfc02f5c719b33fb4deb6dbccf4260b extends Twig_Template
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
        $__internal_5288d85f4f7545ba3e1cf8d807b484e490a24d3c4141a5c661f8b1a8bba9935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5288d85f4f7545ba3e1cf8d807b484e490a24d3c4141a5c661f8b1a8bba9935e->enter($__internal_5288d85f4f7545ba3e1cf8d807b484e490a24d3c4141a5c661f8b1a8bba9935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5288d85f4f7545ba3e1cf8d807b484e490a24d3c4141a5c661f8b1a8bba9935e->leave($__internal_5288d85f4f7545ba3e1cf8d807b484e490a24d3c4141a5c661f8b1a8bba9935e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
