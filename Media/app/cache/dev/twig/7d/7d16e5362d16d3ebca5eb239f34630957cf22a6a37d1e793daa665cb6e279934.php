<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f17a4d753ffcd591b993762a29f0e342c2505b3242364228ed5408cd85d991e extends Twig_Template
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
        $__internal_f2c73cf049d9af794dd652dba78e353d76b418419a8c80f15d67a9037ada941f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c73cf049d9af794dd652dba78e353d76b418419a8c80f15d67a9037ada941f->enter($__internal_f2c73cf049d9af794dd652dba78e353d76b418419a8c80f15d67a9037ada941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f2c73cf049d9af794dd652dba78e353d76b418419a8c80f15d67a9037ada941f->leave($__internal_f2c73cf049d9af794dd652dba78e353d76b418419a8c80f15d67a9037ada941f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
