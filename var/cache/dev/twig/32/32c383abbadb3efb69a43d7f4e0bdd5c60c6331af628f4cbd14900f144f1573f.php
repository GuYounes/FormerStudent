<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c556abb36ea2da27dd5e40ea3f98a1e64a3a9115996d1e2ed94285be57e0517b extends Twig_Template
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
        $__internal_fc1c4239cfddaa01304f7594549996951b7258a2c68dff8424dfef350c751134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1c4239cfddaa01304f7594549996951b7258a2c68dff8424dfef350c751134->enter($__internal_fc1c4239cfddaa01304f7594549996951b7258a2c68dff8424dfef350c751134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_18c2f31b628dbf2632b9e78548de69bf17efeb49c749f8732aa042892351e896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c2f31b628dbf2632b9e78548de69bf17efeb49c749f8732aa042892351e896->enter($__internal_18c2f31b628dbf2632b9e78548de69bf17efeb49c749f8732aa042892351e896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fc1c4239cfddaa01304f7594549996951b7258a2c68dff8424dfef350c751134->leave($__internal_fc1c4239cfddaa01304f7594549996951b7258a2c68dff8424dfef350c751134_prof);

        
        $__internal_18c2f31b628dbf2632b9e78548de69bf17efeb49c749f8732aa042892351e896->leave($__internal_18c2f31b628dbf2632b9e78548de69bf17efeb49c749f8732aa042892351e896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
