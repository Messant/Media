<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a67db690d2b455dcf1bfe244c0c9d71efc2f85828fb90af3d240bfd1ffdda6a7 extends Twig_Template
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
        $__internal_7c42884e6aef76b210d5df25d9f048e1ba08793e5016d4d2e9d38c3686c702a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c42884e6aef76b210d5df25d9f048e1ba08793e5016d4d2e9d38c3686c702a8->enter($__internal_7c42884e6aef76b210d5df25d9f048e1ba08793e5016d4d2e9d38c3686c702a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7c42884e6aef76b210d5df25d9f048e1ba08793e5016d4d2e9d38c3686c702a8->leave($__internal_7c42884e6aef76b210d5df25d9f048e1ba08793e5016d4d2e9d38c3686c702a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
