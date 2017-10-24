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
        $__internal_8ed0fb8fb835b7a9665bb32f05958f0d14faeacb1f892f2a7d228f4d101af553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed0fb8fb835b7a9665bb32f05958f0d14faeacb1f892f2a7d228f4d101af553->enter($__internal_8ed0fb8fb835b7a9665bb32f05958f0d14faeacb1f892f2a7d228f4d101af553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9141eb1992e4e28e577fcc6e8ba9a4d16c561ec7a86e64516cbb364eb6f8d805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141eb1992e4e28e577fcc6e8ba9a4d16c561ec7a86e64516cbb364eb6f8d805->enter($__internal_9141eb1992e4e28e577fcc6e8ba9a4d16c561ec7a86e64516cbb364eb6f8d805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8ed0fb8fb835b7a9665bb32f05958f0d14faeacb1f892f2a7d228f4d101af553->leave($__internal_8ed0fb8fb835b7a9665bb32f05958f0d14faeacb1f892f2a7d228f4d101af553_prof);

        
        $__internal_9141eb1992e4e28e577fcc6e8ba9a4d16c561ec7a86e64516cbb364eb6f8d805->leave($__internal_9141eb1992e4e28e577fcc6e8ba9a4d16c561ec7a86e64516cbb364eb6f8d805_prof);

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
