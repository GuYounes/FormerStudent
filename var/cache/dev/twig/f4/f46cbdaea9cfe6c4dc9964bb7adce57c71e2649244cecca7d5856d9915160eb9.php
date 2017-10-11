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
        $__internal_5ba9d2ad438b1ea167aed7ed6a6dc2b71700c48a47fca583b6c0b975d7a56986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba9d2ad438b1ea167aed7ed6a6dc2b71700c48a47fca583b6c0b975d7a56986->enter($__internal_5ba9d2ad438b1ea167aed7ed6a6dc2b71700c48a47fca583b6c0b975d7a56986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_53bfb6310d9fb2a537354d1ccb067e77ae5142dcd5c588e2abf4874a14e3e1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bfb6310d9fb2a537354d1ccb067e77ae5142dcd5c588e2abf4874a14e3e1c0->enter($__internal_53bfb6310d9fb2a537354d1ccb067e77ae5142dcd5c588e2abf4874a14e3e1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5ba9d2ad438b1ea167aed7ed6a6dc2b71700c48a47fca583b6c0b975d7a56986->leave($__internal_5ba9d2ad438b1ea167aed7ed6a6dc2b71700c48a47fca583b6c0b975d7a56986_prof);

        
        $__internal_53bfb6310d9fb2a537354d1ccb067e77ae5142dcd5c588e2abf4874a14e3e1c0->leave($__internal_53bfb6310d9fb2a537354d1ccb067e77ae5142dcd5c588e2abf4874a14e3e1c0_prof);

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
