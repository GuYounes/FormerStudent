<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4c30bb250ce1f53763f65f61214e8542d867d4c15a4225f75a9db13ac5795850 extends Twig_Template
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
        $__internal_8c1463d53c1f5a3560e011a8f27fedf6b6e87c03c0238347debe41435e71bcd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1463d53c1f5a3560e011a8f27fedf6b6e87c03c0238347debe41435e71bcd0->enter($__internal_8c1463d53c1f5a3560e011a8f27fedf6b6e87c03c0238347debe41435e71bcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_819226bb934c98179f034b0dcdb1a66c4b52333c87819a94685e47e24c0b8f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819226bb934c98179f034b0dcdb1a66c4b52333c87819a94685e47e24c0b8f55->enter($__internal_819226bb934c98179f034b0dcdb1a66c4b52333c87819a94685e47e24c0b8f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8c1463d53c1f5a3560e011a8f27fedf6b6e87c03c0238347debe41435e71bcd0->leave($__internal_8c1463d53c1f5a3560e011a8f27fedf6b6e87c03c0238347debe41435e71bcd0_prof);

        
        $__internal_819226bb934c98179f034b0dcdb1a66c4b52333c87819a94685e47e24c0b8f55->leave($__internal_819226bb934c98179f034b0dcdb1a66c4b52333c87819a94685e47e24c0b8f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
