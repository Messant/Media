<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b7b73cd402d660f920026e377d59c90e697ccf40623697ab20e4096345aa4e3d extends Twig_Template
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
        $__internal_7fb1b40929fc744e270e419b50d7a87114caef9d9037fb8fbd5c0c1a0f668214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb1b40929fc744e270e419b50d7a87114caef9d9037fb8fbd5c0c1a0f668214->enter($__internal_7fb1b40929fc744e270e419b50d7a87114caef9d9037fb8fbd5c0c1a0f668214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7fb1b40929fc744e270e419b50d7a87114caef9d9037fb8fbd5c0c1a0f668214->leave($__internal_7fb1b40929fc744e270e419b50d7a87114caef9d9037fb8fbd5c0c1a0f668214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
