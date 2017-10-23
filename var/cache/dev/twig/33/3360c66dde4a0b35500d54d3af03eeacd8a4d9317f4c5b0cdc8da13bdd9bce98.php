<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_309ed2f843391c0e9d3c676fa21093aa594d89bdc4693a33a3fcf0c71a901add extends Twig_Template
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
        $__internal_764bcda58aaac6de3acc2025de919e19923f1f9d5bd61117eb498e2b068a1f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764bcda58aaac6de3acc2025de919e19923f1f9d5bd61117eb498e2b068a1f53->enter($__internal_764bcda58aaac6de3acc2025de919e19923f1f9d5bd61117eb498e2b068a1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_0841936ddbfef75c1dfdcfbf5f45905735184afd32f014490f5e0b294ab5d2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0841936ddbfef75c1dfdcfbf5f45905735184afd32f014490f5e0b294ab5d2d8->enter($__internal_0841936ddbfef75c1dfdcfbf5f45905735184afd32f014490f5e0b294ab5d2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_764bcda58aaac6de3acc2025de919e19923f1f9d5bd61117eb498e2b068a1f53->leave($__internal_764bcda58aaac6de3acc2025de919e19923f1f9d5bd61117eb498e2b068a1f53_prof);

        
        $__internal_0841936ddbfef75c1dfdcfbf5f45905735184afd32f014490f5e0b294ab5d2d8->leave($__internal_0841936ddbfef75c1dfdcfbf5f45905735184afd32f014490f5e0b294ab5d2d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
