<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8c0d9c81834a2dbb243f2f8d86b791c44d720164efc6992a8a750c8425e2233 extends Twig_Template
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
        $__internal_6a95793e808c68500f328cb98ed7c434dad90d70979c24eb6fa67bb670e92b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a95793e808c68500f328cb98ed7c434dad90d70979c24eb6fa67bb670e92b91->enter($__internal_6a95793e808c68500f328cb98ed7c434dad90d70979c24eb6fa67bb670e92b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f8bddf7188b43abc96ee671593115ae5ac9cf42f84e943178ddd70154cc1a472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bddf7188b43abc96ee671593115ae5ac9cf42f84e943178ddd70154cc1a472->enter($__internal_f8bddf7188b43abc96ee671593115ae5ac9cf42f84e943178ddd70154cc1a472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6a95793e808c68500f328cb98ed7c434dad90d70979c24eb6fa67bb670e92b91->leave($__internal_6a95793e808c68500f328cb98ed7c434dad90d70979c24eb6fa67bb670e92b91_prof);

        
        $__internal_f8bddf7188b43abc96ee671593115ae5ac9cf42f84e943178ddd70154cc1a472->leave($__internal_f8bddf7188b43abc96ee671593115ae5ac9cf42f84e943178ddd70154cc1a472_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
