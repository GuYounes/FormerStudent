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
        $__internal_1df3fd11b07b0bf50c8b035a2d1b2139b8491598db9dc0a051466e37869642cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df3fd11b07b0bf50c8b035a2d1b2139b8491598db9dc0a051466e37869642cf->enter($__internal_1df3fd11b07b0bf50c8b035a2d1b2139b8491598db9dc0a051466e37869642cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1643792184f8f93996ed35de89eeb8e63f6c6c4a1f8cb5c3b8b3f53e336be2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1643792184f8f93996ed35de89eeb8e63f6c6c4a1f8cb5c3b8b3f53e336be2d8->enter($__internal_1643792184f8f93996ed35de89eeb8e63f6c6c4a1f8cb5c3b8b3f53e336be2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1df3fd11b07b0bf50c8b035a2d1b2139b8491598db9dc0a051466e37869642cf->leave($__internal_1df3fd11b07b0bf50c8b035a2d1b2139b8491598db9dc0a051466e37869642cf_prof);

        
        $__internal_1643792184f8f93996ed35de89eeb8e63f6c6c4a1f8cb5c3b8b3f53e336be2d8->leave($__internal_1643792184f8f93996ed35de89eeb8e63f6c6c4a1f8cb5c3b8b3f53e336be2d8_prof);

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
