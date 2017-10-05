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
        $__internal_920fd6064ad8335e54696ed775dae5620936e93d350279c476c6b0f1b834d46a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920fd6064ad8335e54696ed775dae5620936e93d350279c476c6b0f1b834d46a->enter($__internal_920fd6064ad8335e54696ed775dae5620936e93d350279c476c6b0f1b834d46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ce9dcc59f202fa284f5c4ed694d62af2760be3f6d4c17437fae3e70cd857e0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9dcc59f202fa284f5c4ed694d62af2760be3f6d4c17437fae3e70cd857e0a2->enter($__internal_ce9dcc59f202fa284f5c4ed694d62af2760be3f6d4c17437fae3e70cd857e0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_920fd6064ad8335e54696ed775dae5620936e93d350279c476c6b0f1b834d46a->leave($__internal_920fd6064ad8335e54696ed775dae5620936e93d350279c476c6b0f1b834d46a_prof);

        
        $__internal_ce9dcc59f202fa284f5c4ed694d62af2760be3f6d4c17437fae3e70cd857e0a2->leave($__internal_ce9dcc59f202fa284f5c4ed694d62af2760be3f6d4c17437fae3e70cd857e0a2_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
