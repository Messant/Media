<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_615d8e42956373d1eb8e545ab2098a5fc51f0fee3755d1aff47e670c0d2fa94f extends Twig_Template
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
        $__internal_3006f5b1b5bdd92f2fe6f295ae1b2c9690ebadcbec11f23c9720946eef290719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3006f5b1b5bdd92f2fe6f295ae1b2c9690ebadcbec11f23c9720946eef290719->enter($__internal_3006f5b1b5bdd92f2fe6f295ae1b2c9690ebadcbec11f23c9720946eef290719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3006f5b1b5bdd92f2fe6f295ae1b2c9690ebadcbec11f23c9720946eef290719->leave($__internal_3006f5b1b5bdd92f2fe6f295ae1b2c9690ebadcbec11f23c9720946eef290719_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
