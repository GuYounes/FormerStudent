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
        $__internal_e29ed7ea65411916708eb13db7dcdbd257d0684ea695ad1d6cfb2e7ef04b4239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29ed7ea65411916708eb13db7dcdbd257d0684ea695ad1d6cfb2e7ef04b4239->enter($__internal_e29ed7ea65411916708eb13db7dcdbd257d0684ea695ad1d6cfb2e7ef04b4239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d7f2d93d915ee9cbd777d3157b4b2af9556f8907d4dbb8893edfe272180e41b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f2d93d915ee9cbd777d3157b4b2af9556f8907d4dbb8893edfe272180e41b0->enter($__internal_d7f2d93d915ee9cbd777d3157b4b2af9556f8907d4dbb8893edfe272180e41b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e29ed7ea65411916708eb13db7dcdbd257d0684ea695ad1d6cfb2e7ef04b4239->leave($__internal_e29ed7ea65411916708eb13db7dcdbd257d0684ea695ad1d6cfb2e7ef04b4239_prof);

        
        $__internal_d7f2d93d915ee9cbd777d3157b4b2af9556f8907d4dbb8893edfe272180e41b0->leave($__internal_d7f2d93d915ee9cbd777d3157b4b2af9556f8907d4dbb8893edfe272180e41b0_prof);

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
