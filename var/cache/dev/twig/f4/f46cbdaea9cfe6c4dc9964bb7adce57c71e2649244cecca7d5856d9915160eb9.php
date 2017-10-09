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
        $__internal_21ca3b61ab8aa0d6d4e09e64c21c79e2b131b0a36f64d2afdbc9524e5bdec5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ca3b61ab8aa0d6d4e09e64c21c79e2b131b0a36f64d2afdbc9524e5bdec5d6->enter($__internal_21ca3b61ab8aa0d6d4e09e64c21c79e2b131b0a36f64d2afdbc9524e5bdec5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_da10188cc3f6f693657bf48c5d65e6fe36b8c8fdd539927ab0f0f3d0a42729c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da10188cc3f6f693657bf48c5d65e6fe36b8c8fdd539927ab0f0f3d0a42729c1->enter($__internal_da10188cc3f6f693657bf48c5d65e6fe36b8c8fdd539927ab0f0f3d0a42729c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_21ca3b61ab8aa0d6d4e09e64c21c79e2b131b0a36f64d2afdbc9524e5bdec5d6->leave($__internal_21ca3b61ab8aa0d6d4e09e64c21c79e2b131b0a36f64d2afdbc9524e5bdec5d6_prof);

        
        $__internal_da10188cc3f6f693657bf48c5d65e6fe36b8c8fdd539927ab0f0f3d0a42729c1->leave($__internal_da10188cc3f6f693657bf48c5d65e6fe36b8c8fdd539927ab0f0f3d0a42729c1_prof);

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
