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
        $__internal_3ee846fffea46a3e5285c80db2b466c77df9020bf25b535cc1558f8b67e0e7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee846fffea46a3e5285c80db2b466c77df9020bf25b535cc1558f8b67e0e7c1->enter($__internal_3ee846fffea46a3e5285c80db2b466c77df9020bf25b535cc1558f8b67e0e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_53a74be47e4363079e9e88d85d655235ae5e93a534150b96137197b5dbfc81f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a74be47e4363079e9e88d85d655235ae5e93a534150b96137197b5dbfc81f5->enter($__internal_53a74be47e4363079e9e88d85d655235ae5e93a534150b96137197b5dbfc81f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3ee846fffea46a3e5285c80db2b466c77df9020bf25b535cc1558f8b67e0e7c1->leave($__internal_3ee846fffea46a3e5285c80db2b466c77df9020bf25b535cc1558f8b67e0e7c1_prof);

        
        $__internal_53a74be47e4363079e9e88d85d655235ae5e93a534150b96137197b5dbfc81f5->leave($__internal_53a74be47e4363079e9e88d85d655235ae5e93a534150b96137197b5dbfc81f5_prof);

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
