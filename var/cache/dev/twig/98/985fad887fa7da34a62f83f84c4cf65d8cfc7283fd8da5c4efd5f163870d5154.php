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
        $__internal_354967f0aa0fb7f0d526f506e145a49b5ad6cffc24cef7bf4466098adef3f82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354967f0aa0fb7f0d526f506e145a49b5ad6cffc24cef7bf4466098adef3f82f->enter($__internal_354967f0aa0fb7f0d526f506e145a49b5ad6cffc24cef7bf4466098adef3f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4cd65873710a0e4372e832ac51f4d79d464b7a60b2580134118eb6acb13f8139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd65873710a0e4372e832ac51f4d79d464b7a60b2580134118eb6acb13f8139->enter($__internal_4cd65873710a0e4372e832ac51f4d79d464b7a60b2580134118eb6acb13f8139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_354967f0aa0fb7f0d526f506e145a49b5ad6cffc24cef7bf4466098adef3f82f->leave($__internal_354967f0aa0fb7f0d526f506e145a49b5ad6cffc24cef7bf4466098adef3f82f_prof);

        
        $__internal_4cd65873710a0e4372e832ac51f4d79d464b7a60b2580134118eb6acb13f8139->leave($__internal_4cd65873710a0e4372e832ac51f4d79d464b7a60b2580134118eb6acb13f8139_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
