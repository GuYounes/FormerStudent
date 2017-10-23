<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99e0959ded7ed38b9dda18dd7b268513519b4c131fc09027978e66a977fb7030 extends Twig_Template
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
        $__internal_9566141f14bd915d67ad9a494e9ee45d5b57f1c29add9733587ec4f37c2e37e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9566141f14bd915d67ad9a494e9ee45d5b57f1c29add9733587ec4f37c2e37e7->enter($__internal_9566141f14bd915d67ad9a494e9ee45d5b57f1c29add9733587ec4f37c2e37e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3eff1f04cc232621e73ef10bb7929c15e040a06f4b0017b55c52fce1664fc4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eff1f04cc232621e73ef10bb7929c15e040a06f4b0017b55c52fce1664fc4a1->enter($__internal_3eff1f04cc232621e73ef10bb7929c15e040a06f4b0017b55c52fce1664fc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_9566141f14bd915d67ad9a494e9ee45d5b57f1c29add9733587ec4f37c2e37e7->leave($__internal_9566141f14bd915d67ad9a494e9ee45d5b57f1c29add9733587ec4f37c2e37e7_prof);

        
        $__internal_3eff1f04cc232621e73ef10bb7929c15e040a06f4b0017b55c52fce1664fc4a1->leave($__internal_3eff1f04cc232621e73ef10bb7929c15e040a06f4b0017b55c52fce1664fc4a1_prof);

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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
