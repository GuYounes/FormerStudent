<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_958ebcb2c23e8b7542ccd60c6feecf2c86221d79dde62d17012e506c2cae5bfc extends Twig_Template
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
        $__internal_6bfd50b9f32912b9a01112bf11d9af93754d9c6665113344dfa24cbad4e0fdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfd50b9f32912b9a01112bf11d9af93754d9c6665113344dfa24cbad4e0fdf6->enter($__internal_6bfd50b9f32912b9a01112bf11d9af93754d9c6665113344dfa24cbad4e0fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5773a0434438bb3eccc0cd591eefcd15c77bda4e95ef5a1a7402d984b7e983ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5773a0434438bb3eccc0cd591eefcd15c77bda4e95ef5a1a7402d984b7e983ac->enter($__internal_5773a0434438bb3eccc0cd591eefcd15c77bda4e95ef5a1a7402d984b7e983ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6bfd50b9f32912b9a01112bf11d9af93754d9c6665113344dfa24cbad4e0fdf6->leave($__internal_6bfd50b9f32912b9a01112bf11d9af93754d9c6665113344dfa24cbad4e0fdf6_prof);

        
        $__internal_5773a0434438bb3eccc0cd591eefcd15c77bda4e95ef5a1a7402d984b7e983ac->leave($__internal_5773a0434438bb3eccc0cd591eefcd15c77bda4e95ef5a1a7402d984b7e983ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
