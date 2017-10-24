<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2679557db239b2b15c995c190786f335e3a7cfce670bf0454c9ca55fe4806443 extends Twig_Template
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
        $__internal_275180229c93c3642bbe18ff238197dd59e3d66ac37a673bd166a64a881d4d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275180229c93c3642bbe18ff238197dd59e3d66ac37a673bd166a64a881d4d59->enter($__internal_275180229c93c3642bbe18ff238197dd59e3d66ac37a673bd166a64a881d4d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_831cd2cb36fcf2ce5bd4d38f068bd7a5a20359305d2f9498cfc48db656a38aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831cd2cb36fcf2ce5bd4d38f068bd7a5a20359305d2f9498cfc48db656a38aa4->enter($__internal_831cd2cb36fcf2ce5bd4d38f068bd7a5a20359305d2f9498cfc48db656a38aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_275180229c93c3642bbe18ff238197dd59e3d66ac37a673bd166a64a881d4d59->leave($__internal_275180229c93c3642bbe18ff238197dd59e3d66ac37a673bd166a64a881d4d59_prof);

        
        $__internal_831cd2cb36fcf2ce5bd4d38f068bd7a5a20359305d2f9498cfc48db656a38aa4->leave($__internal_831cd2cb36fcf2ce5bd4d38f068bd7a5a20359305d2f9498cfc48db656a38aa4_prof);

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
