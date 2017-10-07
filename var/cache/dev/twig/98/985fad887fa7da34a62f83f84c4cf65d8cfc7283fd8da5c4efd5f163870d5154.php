<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6dc49a7563e1be1f74e58a884c863cbe3e8c4eb92d0e4ef5e8c8bd6edc40d4b4 extends Twig_Template
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
        $__internal_9b67e111a993756f0ab5b2c454e1d4b139440f28a13f8f8bb089f7923167ef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b67e111a993756f0ab5b2c454e1d4b139440f28a13f8f8bb089f7923167ef15->enter($__internal_9b67e111a993756f0ab5b2c454e1d4b139440f28a13f8f8bb089f7923167ef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6f3eaaae5182d6ab50262ad5617cb4e04d0a465ac4b8932fac15aaccae4d6d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3eaaae5182d6ab50262ad5617cb4e04d0a465ac4b8932fac15aaccae4d6d43->enter($__internal_6f3eaaae5182d6ab50262ad5617cb4e04d0a465ac4b8932fac15aaccae4d6d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9b67e111a993756f0ab5b2c454e1d4b139440f28a13f8f8bb089f7923167ef15->leave($__internal_9b67e111a993756f0ab5b2c454e1d4b139440f28a13f8f8bb089f7923167ef15_prof);

        
        $__internal_6f3eaaae5182d6ab50262ad5617cb4e04d0a465ac4b8932fac15aaccae4d6d43->leave($__internal_6f3eaaae5182d6ab50262ad5617cb4e04d0a465ac4b8932fac15aaccae4d6d43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
