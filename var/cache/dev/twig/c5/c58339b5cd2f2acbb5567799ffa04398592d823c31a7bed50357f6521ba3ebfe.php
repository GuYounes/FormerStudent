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
        $__internal_64f798e1bf952f4f7e01521fc7cc1a4bdd27ba287aa8751d275ce30ae1343691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f798e1bf952f4f7e01521fc7cc1a4bdd27ba287aa8751d275ce30ae1343691->enter($__internal_64f798e1bf952f4f7e01521fc7cc1a4bdd27ba287aa8751d275ce30ae1343691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_091d684d3893f14020b1d49ee78999e0c9d2466ad8f6955882e9435a7b93cf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091d684d3893f14020b1d49ee78999e0c9d2466ad8f6955882e9435a7b93cf85->enter($__internal_091d684d3893f14020b1d49ee78999e0c9d2466ad8f6955882e9435a7b93cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_64f798e1bf952f4f7e01521fc7cc1a4bdd27ba287aa8751d275ce30ae1343691->leave($__internal_64f798e1bf952f4f7e01521fc7cc1a4bdd27ba287aa8751d275ce30ae1343691_prof);

        
        $__internal_091d684d3893f14020b1d49ee78999e0c9d2466ad8f6955882e9435a7b93cf85->leave($__internal_091d684d3893f14020b1d49ee78999e0c9d2466ad8f6955882e9435a7b93cf85_prof);

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
