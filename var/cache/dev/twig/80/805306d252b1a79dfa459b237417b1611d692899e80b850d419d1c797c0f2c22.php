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
        $__internal_04add73d1a52fc9bc741dcc10c77b7a8186bfec138581e97eaba0d13cc5636b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04add73d1a52fc9bc741dcc10c77b7a8186bfec138581e97eaba0d13cc5636b1->enter($__internal_04add73d1a52fc9bc741dcc10c77b7a8186bfec138581e97eaba0d13cc5636b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3fe4356a74b06764dcd68de6c5afa7df1abd3cd8dbf21f22729ec011471c7245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe4356a74b06764dcd68de6c5afa7df1abd3cd8dbf21f22729ec011471c7245->enter($__internal_3fe4356a74b06764dcd68de6c5afa7df1abd3cd8dbf21f22729ec011471c7245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_04add73d1a52fc9bc741dcc10c77b7a8186bfec138581e97eaba0d13cc5636b1->leave($__internal_04add73d1a52fc9bc741dcc10c77b7a8186bfec138581e97eaba0d13cc5636b1_prof);

        
        $__internal_3fe4356a74b06764dcd68de6c5afa7df1abd3cd8dbf21f22729ec011471c7245->leave($__internal_3fe4356a74b06764dcd68de6c5afa7df1abd3cd8dbf21f22729ec011471c7245_prof);

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
