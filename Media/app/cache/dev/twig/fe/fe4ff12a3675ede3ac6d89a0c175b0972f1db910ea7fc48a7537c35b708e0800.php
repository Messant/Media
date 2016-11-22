<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_69044ea2d4d326431a972335d12de1bd195902d04ae2e52f4bcf62e9e80d8014 extends Twig_Template
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
        $__internal_0375b3ec50f1169697f8eebd45c37b3d6b688c4b4f18005f2a291ab285047d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0375b3ec50f1169697f8eebd45c37b3d6b688c4b4f18005f2a291ab285047d6f->enter($__internal_0375b3ec50f1169697f8eebd45c37b3d6b688c4b4f18005f2a291ab285047d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0375b3ec50f1169697f8eebd45c37b3d6b688c4b4f18005f2a291ab285047d6f->leave($__internal_0375b3ec50f1169697f8eebd45c37b3d6b688c4b4f18005f2a291ab285047d6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/wilder4/Documents/Evaluation/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
