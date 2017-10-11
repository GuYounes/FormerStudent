<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8859827bcea42ddb3b7c6a041082f75d112ee1ae690a512dcfa4d94559e8bfa extends Twig_Template
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
        $__internal_f3ded5e0c8a42fa24f9556b7b5e8f7753ccaede358fedda9b1df97eb3dae1abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ded5e0c8a42fa24f9556b7b5e8f7753ccaede358fedda9b1df97eb3dae1abb->enter($__internal_f3ded5e0c8a42fa24f9556b7b5e8f7753ccaede358fedda9b1df97eb3dae1abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8bd476aee5a864b5637eb3c226f2d364fee31cb6af805a5dc9a7612751a4ae50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd476aee5a864b5637eb3c226f2d364fee31cb6af805a5dc9a7612751a4ae50->enter($__internal_8bd476aee5a864b5637eb3c226f2d364fee31cb6af805a5dc9a7612751a4ae50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f3ded5e0c8a42fa24f9556b7b5e8f7753ccaede358fedda9b1df97eb3dae1abb->leave($__internal_f3ded5e0c8a42fa24f9556b7b5e8f7753ccaede358fedda9b1df97eb3dae1abb_prof);

        
        $__internal_8bd476aee5a864b5637eb3c226f2d364fee31cb6af805a5dc9a7612751a4ae50->leave($__internal_8bd476aee5a864b5637eb3c226f2d364fee31cb6af805a5dc9a7612751a4ae50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
