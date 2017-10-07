<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f96ec3b282c28522fc691c5435ca7700f41bb1de3dc3287e22ecbac36b5ebca2 extends Twig_Template
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
        $__internal_3f4b17ec4f53187284f46623fdb79287bbaabf7739962342940d8a3c08833d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4b17ec4f53187284f46623fdb79287bbaabf7739962342940d8a3c08833d71->enter($__internal_3f4b17ec4f53187284f46623fdb79287bbaabf7739962342940d8a3c08833d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_67bec3c849f4b9f668d2126df9ee4bdda869a7e14aa39d85f51fbfde63a42037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bec3c849f4b9f668d2126df9ee4bdda869a7e14aa39d85f51fbfde63a42037->enter($__internal_67bec3c849f4b9f668d2126df9ee4bdda869a7e14aa39d85f51fbfde63a42037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3f4b17ec4f53187284f46623fdb79287bbaabf7739962342940d8a3c08833d71->leave($__internal_3f4b17ec4f53187284f46623fdb79287bbaabf7739962342940d8a3c08833d71_prof);

        
        $__internal_67bec3c849f4b9f668d2126df9ee4bdda869a7e14aa39d85f51fbfde63a42037->leave($__internal_67bec3c849f4b9f668d2126df9ee4bdda869a7e14aa39d85f51fbfde63a42037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
