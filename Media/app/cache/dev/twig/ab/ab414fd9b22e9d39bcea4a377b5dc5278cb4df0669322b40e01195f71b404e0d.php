<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3032ffa5b6b1336552a0fe32b554ccb633d073a5ff7081bdf2a09fb96c54a8b1 extends Twig_Template
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
        $__internal_5586797a77f3b73644d8dde625c9bdad8a46ecb65b9e8f87c909010005308805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5586797a77f3b73644d8dde625c9bdad8a46ecb65b9e8f87c909010005308805->enter($__internal_5586797a77f3b73644d8dde625c9bdad8a46ecb65b9e8f87c909010005308805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5586797a77f3b73644d8dde625c9bdad8a46ecb65b9e8f87c909010005308805->leave($__internal_5586797a77f3b73644d8dde625c9bdad8a46ecb65b9e8f87c909010005308805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
