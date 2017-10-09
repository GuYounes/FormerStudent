<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f69657e3d276c16edee093717c05dcc3221cb80df4accd26030275aa702df7b extends Twig_Template
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
        $__internal_72d0acccb7bfd92ae25987915c3d82b751e985c89e162e7ce920caa15970189e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d0acccb7bfd92ae25987915c3d82b751e985c89e162e7ce920caa15970189e->enter($__internal_72d0acccb7bfd92ae25987915c3d82b751e985c89e162e7ce920caa15970189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bf5e518e40cfe992b686593c5524b223fecda4b0e79327475f90f089281f7c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5e518e40cfe992b686593c5524b223fecda4b0e79327475f90f089281f7c31->enter($__internal_bf5e518e40cfe992b686593c5524b223fecda4b0e79327475f90f089281f7c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_72d0acccb7bfd92ae25987915c3d82b751e985c89e162e7ce920caa15970189e->leave($__internal_72d0acccb7bfd92ae25987915c3d82b751e985c89e162e7ce920caa15970189e_prof);

        
        $__internal_bf5e518e40cfe992b686593c5524b223fecda4b0e79327475f90f089281f7c31->leave($__internal_bf5e518e40cfe992b686593c5524b223fecda4b0e79327475f90f089281f7c31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
