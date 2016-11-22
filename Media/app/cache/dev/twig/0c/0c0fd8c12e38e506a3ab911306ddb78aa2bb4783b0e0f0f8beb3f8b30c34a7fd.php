<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_812a0c6e4b8efbebdbf18d35d9f2f1449dd4eb2be526b91f6e7aa0f3f574df4a extends Twig_Template
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
        $__internal_bbcbc63d08bb6c6717f61d9aacc2953d0f99aced90244d7a5a36da3f62321751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcbc63d08bb6c6717f61d9aacc2953d0f99aced90244d7a5a36da3f62321751->enter($__internal_bbcbc63d08bb6c6717f61d9aacc2953d0f99aced90244d7a5a36da3f62321751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bbcbc63d08bb6c6717f61d9aacc2953d0f99aced90244d7a5a36da3f62321751->leave($__internal_bbcbc63d08bb6c6717f61d9aacc2953d0f99aced90244d7a5a36da3f62321751_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
