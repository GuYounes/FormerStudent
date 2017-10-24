<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_84d3451ff3f1a54a63a7e48a169514969c20bc95f3c46c8cffaae1c4760c2c36 extends Twig_Template
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
        $__internal_f65795862dbbf7498c03f7f8455cd2a204d8b0d2f4e3cf609db146ee389d1200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65795862dbbf7498c03f7f8455cd2a204d8b0d2f4e3cf609db146ee389d1200->enter($__internal_f65795862dbbf7498c03f7f8455cd2a204d8b0d2f4e3cf609db146ee389d1200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b1db52f5bb28026310c9f8f7543bfe3cf06ec7e95bc1a78897e2305ea8f3da9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1db52f5bb28026310c9f8f7543bfe3cf06ec7e95bc1a78897e2305ea8f3da9e->enter($__internal_b1db52f5bb28026310c9f8f7543bfe3cf06ec7e95bc1a78897e2305ea8f3da9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f65795862dbbf7498c03f7f8455cd2a204d8b0d2f4e3cf609db146ee389d1200->leave($__internal_f65795862dbbf7498c03f7f8455cd2a204d8b0d2f4e3cf609db146ee389d1200_prof);

        
        $__internal_b1db52f5bb28026310c9f8f7543bfe3cf06ec7e95bc1a78897e2305ea8f3da9e->leave($__internal_b1db52f5bb28026310c9f8f7543bfe3cf06ec7e95bc1a78897e2305ea8f3da9e_prof);

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
