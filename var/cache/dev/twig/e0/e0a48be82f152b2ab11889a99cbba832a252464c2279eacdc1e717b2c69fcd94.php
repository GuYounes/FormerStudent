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
        $__internal_795bf44f4feaf61c4ae11a7ed8720fccf28fbc5e81725f806e2bbdb2cc4d0a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795bf44f4feaf61c4ae11a7ed8720fccf28fbc5e81725f806e2bbdb2cc4d0a7c->enter($__internal_795bf44f4feaf61c4ae11a7ed8720fccf28fbc5e81725f806e2bbdb2cc4d0a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a43b0b10a271229abbafe7de9c7bbd488065459255921902fbceeb965d1f26ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43b0b10a271229abbafe7de9c7bbd488065459255921902fbceeb965d1f26ac->enter($__internal_a43b0b10a271229abbafe7de9c7bbd488065459255921902fbceeb965d1f26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_795bf44f4feaf61c4ae11a7ed8720fccf28fbc5e81725f806e2bbdb2cc4d0a7c->leave($__internal_795bf44f4feaf61c4ae11a7ed8720fccf28fbc5e81725f806e2bbdb2cc4d0a7c_prof);

        
        $__internal_a43b0b10a271229abbafe7de9c7bbd488065459255921902fbceeb965d1f26ac->leave($__internal_a43b0b10a271229abbafe7de9c7bbd488065459255921902fbceeb965d1f26ac_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
