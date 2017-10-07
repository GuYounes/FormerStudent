<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b55875fceb5a6e6bdb2d3a8b096c2d492db64ac4563cf44abf088c9facad4f26 extends Twig_Template
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
        $__internal_e572d9e06c727e70fa74f6340d4e1302f227ecbc4bdc1ee2d580d46a64db1de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e572d9e06c727e70fa74f6340d4e1302f227ecbc4bdc1ee2d580d46a64db1de9->enter($__internal_e572d9e06c727e70fa74f6340d4e1302f227ecbc4bdc1ee2d580d46a64db1de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c0d32f57d1117156cd29f8da055da7af14112c2f0aded888f134a0585e6d7dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d32f57d1117156cd29f8da055da7af14112c2f0aded888f134a0585e6d7dbf->enter($__internal_c0d32f57d1117156cd29f8da055da7af14112c2f0aded888f134a0585e6d7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e572d9e06c727e70fa74f6340d4e1302f227ecbc4bdc1ee2d580d46a64db1de9->leave($__internal_e572d9e06c727e70fa74f6340d4e1302f227ecbc4bdc1ee2d580d46a64db1de9_prof);

        
        $__internal_c0d32f57d1117156cd29f8da055da7af14112c2f0aded888f134a0585e6d7dbf->leave($__internal_c0d32f57d1117156cd29f8da055da7af14112c2f0aded888f134a0585e6d7dbf_prof);

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
