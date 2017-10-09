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
        $__internal_503eef0b5172288623329fc8271106aa261114cd9635f056b4cf1be4f0191a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503eef0b5172288623329fc8271106aa261114cd9635f056b4cf1be4f0191a77->enter($__internal_503eef0b5172288623329fc8271106aa261114cd9635f056b4cf1be4f0191a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f494978ec69dd14dd64856fbb04c3c9c45323b62de0ec3c1d0c19411562d8b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f494978ec69dd14dd64856fbb04c3c9c45323b62de0ec3c1d0c19411562d8b71->enter($__internal_f494978ec69dd14dd64856fbb04c3c9c45323b62de0ec3c1d0c19411562d8b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_503eef0b5172288623329fc8271106aa261114cd9635f056b4cf1be4f0191a77->leave($__internal_503eef0b5172288623329fc8271106aa261114cd9635f056b4cf1be4f0191a77_prof);

        
        $__internal_f494978ec69dd14dd64856fbb04c3c9c45323b62de0ec3c1d0c19411562d8b71->leave($__internal_f494978ec69dd14dd64856fbb04c3c9c45323b62de0ec3c1d0c19411562d8b71_prof);

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
