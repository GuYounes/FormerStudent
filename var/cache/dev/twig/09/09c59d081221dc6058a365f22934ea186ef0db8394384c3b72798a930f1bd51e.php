<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1e94091ba6ac833e490cd9ac2d3f3ccc0244bcafcf8e5a6abf27694ad8ae49b3 extends Twig_Template
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
        $__internal_01fa15c7e3401a9f3302e77ec54f17edb1b05fdd48b8555ed4ebdb2ce7ddccb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fa15c7e3401a9f3302e77ec54f17edb1b05fdd48b8555ed4ebdb2ce7ddccb4->enter($__internal_01fa15c7e3401a9f3302e77ec54f17edb1b05fdd48b8555ed4ebdb2ce7ddccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0e1bf774b8a9db4c732acb68f738de7ef96715688626de035007f01427dff4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1bf774b8a9db4c732acb68f738de7ef96715688626de035007f01427dff4e3->enter($__internal_0e1bf774b8a9db4c732acb68f738de7ef96715688626de035007f01427dff4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_01fa15c7e3401a9f3302e77ec54f17edb1b05fdd48b8555ed4ebdb2ce7ddccb4->leave($__internal_01fa15c7e3401a9f3302e77ec54f17edb1b05fdd48b8555ed4ebdb2ce7ddccb4_prof);

        
        $__internal_0e1bf774b8a9db4c732acb68f738de7ef96715688626de035007f01427dff4e3->leave($__internal_0e1bf774b8a9db4c732acb68f738de7ef96715688626de035007f01427dff4e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
