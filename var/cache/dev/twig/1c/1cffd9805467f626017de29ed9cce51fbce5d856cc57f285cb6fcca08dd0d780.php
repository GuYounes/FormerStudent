<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_59ec4706824ffe5c596cd9f663934ea6f8b29e0bf0ee3a4e15a78255ec323ca0 extends Twig_Template
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
        $__internal_5250cbe928a341e029d19c3b5517c56223a91f8caaafc57ed0b461c310ea66e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5250cbe928a341e029d19c3b5517c56223a91f8caaafc57ed0b461c310ea66e5->enter($__internal_5250cbe928a341e029d19c3b5517c56223a91f8caaafc57ed0b461c310ea66e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d7d8f07418cea9684914d4637251d7b04f0f39727be23c6779d3fd47a24acd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d8f07418cea9684914d4637251d7b04f0f39727be23c6779d3fd47a24acd28->enter($__internal_d7d8f07418cea9684914d4637251d7b04f0f39727be23c6779d3fd47a24acd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5250cbe928a341e029d19c3b5517c56223a91f8caaafc57ed0b461c310ea66e5->leave($__internal_5250cbe928a341e029d19c3b5517c56223a91f8caaafc57ed0b461c310ea66e5_prof);

        
        $__internal_d7d8f07418cea9684914d4637251d7b04f0f39727be23c6779d3fd47a24acd28->leave($__internal_d7d8f07418cea9684914d4637251d7b04f0f39727be23c6779d3fd47a24acd28_prof);

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
