<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_63dfcc62dcfd7f15f87652d4d805e58114f3825ac9bc69f906b478af2a515afd extends Twig_Template
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
        $__internal_8e4c84a845015f52363f4744d35d0f418ec04fba4e518819c4ae0c596c0a6721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4c84a845015f52363f4744d35d0f418ec04fba4e518819c4ae0c596c0a6721->enter($__internal_8e4c84a845015f52363f4744d35d0f418ec04fba4e518819c4ae0c596c0a6721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8e4c84a845015f52363f4744d35d0f418ec04fba4e518819c4ae0c596c0a6721->leave($__internal_8e4c84a845015f52363f4744d35d0f418ec04fba4e518819c4ae0c596c0a6721_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
