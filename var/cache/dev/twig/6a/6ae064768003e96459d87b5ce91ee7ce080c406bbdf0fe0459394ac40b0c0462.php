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
        $__internal_34dde802aa0eb701ceca1b8198e78674b63f3294340c8b6c6540fef007bf2fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dde802aa0eb701ceca1b8198e78674b63f3294340c8b6c6540fef007bf2fb7->enter($__internal_34dde802aa0eb701ceca1b8198e78674b63f3294340c8b6c6540fef007bf2fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a42aac240677c122fcb694bad9da9b5d50c3af388cf0a0f578e8283a716941f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42aac240677c122fcb694bad9da9b5d50c3af388cf0a0f578e8283a716941f7->enter($__internal_a42aac240677c122fcb694bad9da9b5d50c3af388cf0a0f578e8283a716941f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_34dde802aa0eb701ceca1b8198e78674b63f3294340c8b6c6540fef007bf2fb7->leave($__internal_34dde802aa0eb701ceca1b8198e78674b63f3294340c8b6c6540fef007bf2fb7_prof);

        
        $__internal_a42aac240677c122fcb694bad9da9b5d50c3af388cf0a0f578e8283a716941f7->leave($__internal_a42aac240677c122fcb694bad9da9b5d50c3af388cf0a0f578e8283a716941f7_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
