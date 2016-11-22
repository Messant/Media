<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7d0e34a9cd0f993055c43bbdaf8d3dc2e94a66f96867d76716e29c4cfdb18705 extends Twig_Template
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
        $__internal_024698c7e901533d570bce2a1ed8f3c7c2a261cc7841851fc6a0234d78cb60be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024698c7e901533d570bce2a1ed8f3c7c2a261cc7841851fc6a0234d78cb60be->enter($__internal_024698c7e901533d570bce2a1ed8f3c7c2a261cc7841851fc6a0234d78cb60be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_024698c7e901533d570bce2a1ed8f3c7c2a261cc7841851fc6a0234d78cb60be->leave($__internal_024698c7e901533d570bce2a1ed8f3c7c2a261cc7841851fc6a0234d78cb60be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
