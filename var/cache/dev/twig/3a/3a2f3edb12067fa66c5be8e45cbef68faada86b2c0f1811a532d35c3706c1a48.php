<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fdab36a12fb8f98d31cd5d120632f58f6514d6d4d11649463ea7381faa5250d0 extends Twig_Template
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
        $__internal_0687db3a18eeefcedeb4122dbae48e07551f3553e557a17982dbfd3f14e4f0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0687db3a18eeefcedeb4122dbae48e07551f3553e557a17982dbfd3f14e4f0b7->enter($__internal_0687db3a18eeefcedeb4122dbae48e07551f3553e557a17982dbfd3f14e4f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_06bef32012eb4d7754ce43665145d5262127c6e633c1625eae3289e32e9887d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bef32012eb4d7754ce43665145d5262127c6e633c1625eae3289e32e9887d9->enter($__internal_06bef32012eb4d7754ce43665145d5262127c6e633c1625eae3289e32e9887d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0687db3a18eeefcedeb4122dbae48e07551f3553e557a17982dbfd3f14e4f0b7->leave($__internal_0687db3a18eeefcedeb4122dbae48e07551f3553e557a17982dbfd3f14e4f0b7_prof);

        
        $__internal_06bef32012eb4d7754ce43665145d5262127c6e633c1625eae3289e32e9887d9->leave($__internal_06bef32012eb4d7754ce43665145d5262127c6e633c1625eae3289e32e9887d9_prof);

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
