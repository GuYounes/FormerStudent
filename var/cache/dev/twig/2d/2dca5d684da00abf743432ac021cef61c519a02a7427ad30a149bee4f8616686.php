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
        $__internal_e2b0f0e1c7bf01ae4ed394149df64ebfe06c2f9fe68c8c2f0c05d1c2f9311c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b0f0e1c7bf01ae4ed394149df64ebfe06c2f9fe68c8c2f0c05d1c2f9311c09->enter($__internal_e2b0f0e1c7bf01ae4ed394149df64ebfe06c2f9fe68c8c2f0c05d1c2f9311c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_086ca38f0182fe3946db41f7f69f31096a74fe69b9bc7eefec68fc82b1e632da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086ca38f0182fe3946db41f7f69f31096a74fe69b9bc7eefec68fc82b1e632da->enter($__internal_086ca38f0182fe3946db41f7f69f31096a74fe69b9bc7eefec68fc82b1e632da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e2b0f0e1c7bf01ae4ed394149df64ebfe06c2f9fe68c8c2f0c05d1c2f9311c09->leave($__internal_e2b0f0e1c7bf01ae4ed394149df64ebfe06c2f9fe68c8c2f0c05d1c2f9311c09_prof);

        
        $__internal_086ca38f0182fe3946db41f7f69f31096a74fe69b9bc7eefec68fc82b1e632da->leave($__internal_086ca38f0182fe3946db41f7f69f31096a74fe69b9bc7eefec68fc82b1e632da_prof);

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
