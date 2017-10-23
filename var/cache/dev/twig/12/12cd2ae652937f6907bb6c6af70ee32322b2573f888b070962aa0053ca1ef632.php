<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_194d7c0c008c33af5e9dd059c01e71d149efe9fe22656850a8fdf887fa214466 extends Twig_Template
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
        $__internal_f902f94a387f48bd55883b2d84efb35a4729c4af010e2308c3059bde3f570561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f902f94a387f48bd55883b2d84efb35a4729c4af010e2308c3059bde3f570561->enter($__internal_f902f94a387f48bd55883b2d84efb35a4729c4af010e2308c3059bde3f570561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f534649984a441617c270d531a5d091898a2d6c66f72fbb0cdff16da98f5368c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f534649984a441617c270d531a5d091898a2d6c66f72fbb0cdff16da98f5368c->enter($__internal_f534649984a441617c270d531a5d091898a2d6c66f72fbb0cdff16da98f5368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f902f94a387f48bd55883b2d84efb35a4729c4af010e2308c3059bde3f570561->leave($__internal_f902f94a387f48bd55883b2d84efb35a4729c4af010e2308c3059bde3f570561_prof);

        
        $__internal_f534649984a441617c270d531a5d091898a2d6c66f72fbb0cdff16da98f5368c->leave($__internal_f534649984a441617c270d531a5d091898a2d6c66f72fbb0cdff16da98f5368c_prof);

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
