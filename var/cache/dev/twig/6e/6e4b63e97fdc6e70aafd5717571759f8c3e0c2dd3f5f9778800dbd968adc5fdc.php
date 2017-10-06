<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e9b5ba64d3d05098cae69222295e7e7dde91855500c94688163007ba6d002f67 extends Twig_Template
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
        $__internal_e8a16044f21a5433711c677a6963c86dc990f27275569f9eef66f0636daa4296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a16044f21a5433711c677a6963c86dc990f27275569f9eef66f0636daa4296->enter($__internal_e8a16044f21a5433711c677a6963c86dc990f27275569f9eef66f0636daa4296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a15899e30654afe82af0c883193b4f82a3dfa4688700f2822d695ec606349371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15899e30654afe82af0c883193b4f82a3dfa4688700f2822d695ec606349371->enter($__internal_a15899e30654afe82af0c883193b4f82a3dfa4688700f2822d695ec606349371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e8a16044f21a5433711c677a6963c86dc990f27275569f9eef66f0636daa4296->leave($__internal_e8a16044f21a5433711c677a6963c86dc990f27275569f9eef66f0636daa4296_prof);

        
        $__internal_a15899e30654afe82af0c883193b4f82a3dfa4688700f2822d695ec606349371->leave($__internal_a15899e30654afe82af0c883193b4f82a3dfa4688700f2822d695ec606349371_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
