<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6a3a88d85577847864127ccb2f29be4ee4110cccee498e2fe4dee8b3df36a33c extends Twig_Template
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
        $__internal_42705e9e3b3efef11544226e179a1b3a61d2e5a2a7c265db210936684da5a1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42705e9e3b3efef11544226e179a1b3a61d2e5a2a7c265db210936684da5a1e1->enter($__internal_42705e9e3b3efef11544226e179a1b3a61d2e5a2a7c265db210936684da5a1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_12ee75fa2e7ae34b69a7f2ddab1dd54be7781fcfa3dbd87086a59e5c45f95447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ee75fa2e7ae34b69a7f2ddab1dd54be7781fcfa3dbd87086a59e5c45f95447->enter($__internal_12ee75fa2e7ae34b69a7f2ddab1dd54be7781fcfa3dbd87086a59e5c45f95447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_42705e9e3b3efef11544226e179a1b3a61d2e5a2a7c265db210936684da5a1e1->leave($__internal_42705e9e3b3efef11544226e179a1b3a61d2e5a2a7c265db210936684da5a1e1_prof);

        
        $__internal_12ee75fa2e7ae34b69a7f2ddab1dd54be7781fcfa3dbd87086a59e5c45f95447->leave($__internal_12ee75fa2e7ae34b69a7f2ddab1dd54be7781fcfa3dbd87086a59e5c45f95447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
