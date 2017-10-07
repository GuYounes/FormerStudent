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
        $__internal_ada28b952b8e241009027694280dc14ec6ab586e2c7d6baa9514cae952332f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada28b952b8e241009027694280dc14ec6ab586e2c7d6baa9514cae952332f3b->enter($__internal_ada28b952b8e241009027694280dc14ec6ab586e2c7d6baa9514cae952332f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7b3db3419ab19b69cc4d869551a166094639f3731ebf1ab0892e94dde1929793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3db3419ab19b69cc4d869551a166094639f3731ebf1ab0892e94dde1929793->enter($__internal_7b3db3419ab19b69cc4d869551a166094639f3731ebf1ab0892e94dde1929793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ada28b952b8e241009027694280dc14ec6ab586e2c7d6baa9514cae952332f3b->leave($__internal_ada28b952b8e241009027694280dc14ec6ab586e2c7d6baa9514cae952332f3b_prof);

        
        $__internal_7b3db3419ab19b69cc4d869551a166094639f3731ebf1ab0892e94dde1929793->leave($__internal_7b3db3419ab19b69cc4d869551a166094639f3731ebf1ab0892e94dde1929793_prof);

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
