<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8b3b4ce1cec50521413ea9fafec98245435688b50ce2271e1a8626776d05f0b5 extends Twig_Template
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
        $__internal_7d65ee8d5539773c0e3640c39830997f2bb1acd4e3c3fbe61e7c480f3525c530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d65ee8d5539773c0e3640c39830997f2bb1acd4e3c3fbe61e7c480f3525c530->enter($__internal_7d65ee8d5539773c0e3640c39830997f2bb1acd4e3c3fbe61e7c480f3525c530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d65ee8d5539773c0e3640c39830997f2bb1acd4e3c3fbe61e7c480f3525c530->leave($__internal_7d65ee8d5539773c0e3640c39830997f2bb1acd4e3c3fbe61e7c480f3525c530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
