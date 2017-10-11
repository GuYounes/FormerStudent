<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0fe80eacd02d7882ac251e4bc86d51a5b76ed021d036bf7cd8ccfcd6a668ddb1 extends Twig_Template
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
        $__internal_04bec6234b96fc6cf4a4de4834e34d2d5cee43ee4ceddf380344a8205637fe35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bec6234b96fc6cf4a4de4834e34d2d5cee43ee4ceddf380344a8205637fe35->enter($__internal_04bec6234b96fc6cf4a4de4834e34d2d5cee43ee4ceddf380344a8205637fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ec1b6b1e3fd8c8a82669b85fb89dcfb3a4af48866655ec8834edfd542feb24be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1b6b1e3fd8c8a82669b85fb89dcfb3a4af48866655ec8834edfd542feb24be->enter($__internal_ec1b6b1e3fd8c8a82669b85fb89dcfb3a4af48866655ec8834edfd542feb24be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_04bec6234b96fc6cf4a4de4834e34d2d5cee43ee4ceddf380344a8205637fe35->leave($__internal_04bec6234b96fc6cf4a4de4834e34d2d5cee43ee4ceddf380344a8205637fe35_prof);

        
        $__internal_ec1b6b1e3fd8c8a82669b85fb89dcfb3a4af48866655ec8834edfd542feb24be->leave($__internal_ec1b6b1e3fd8c8a82669b85fb89dcfb3a4af48866655ec8834edfd542feb24be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
