<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bf47357d4116654bbc9e7252de32333cca92f1bb1bdc35abbb3c748a7d515079 extends Twig_Template
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
        $__internal_77fcd5024d7baf602cbd56318495fdf06836cee5fc798250fbe15dfe4b064f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fcd5024d7baf602cbd56318495fdf06836cee5fc798250fbe15dfe4b064f6f->enter($__internal_77fcd5024d7baf602cbd56318495fdf06836cee5fc798250fbe15dfe4b064f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_12a2a6807a65e481717f1b8c048148a0fd2f52fdeb4c29571e747f4882b2833b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a2a6807a65e481717f1b8c048148a0fd2f52fdeb4c29571e747f4882b2833b->enter($__internal_12a2a6807a65e481717f1b8c048148a0fd2f52fdeb4c29571e747f4882b2833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_77fcd5024d7baf602cbd56318495fdf06836cee5fc798250fbe15dfe4b064f6f->leave($__internal_77fcd5024d7baf602cbd56318495fdf06836cee5fc798250fbe15dfe4b064f6f_prof);

        
        $__internal_12a2a6807a65e481717f1b8c048148a0fd2f52fdeb4c29571e747f4882b2833b->leave($__internal_12a2a6807a65e481717f1b8c048148a0fd2f52fdeb4c29571e747f4882b2833b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
