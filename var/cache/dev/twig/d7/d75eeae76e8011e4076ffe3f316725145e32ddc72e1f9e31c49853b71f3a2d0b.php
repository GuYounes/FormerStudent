<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1d57ba635aa2a2e57b97b562cb569545d932a894e76258087680c2757b23d307 extends Twig_Template
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
        $__internal_a3ba945d507ec8ea313e4b7d76be318390c4adce9c5e93571622f7e2656e8eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ba945d507ec8ea313e4b7d76be318390c4adce9c5e93571622f7e2656e8eda->enter($__internal_a3ba945d507ec8ea313e4b7d76be318390c4adce9c5e93571622f7e2656e8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d3f5982439eeaac306a72598098376dbc0369a52dd30bf185f8c1477bb96c27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f5982439eeaac306a72598098376dbc0369a52dd30bf185f8c1477bb96c27f->enter($__internal_d3f5982439eeaac306a72598098376dbc0369a52dd30bf185f8c1477bb96c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a3ba945d507ec8ea313e4b7d76be318390c4adce9c5e93571622f7e2656e8eda->leave($__internal_a3ba945d507ec8ea313e4b7d76be318390c4adce9c5e93571622f7e2656e8eda_prof);

        
        $__internal_d3f5982439eeaac306a72598098376dbc0369a52dd30bf185f8c1477bb96c27f->leave($__internal_d3f5982439eeaac306a72598098376dbc0369a52dd30bf185f8c1477bb96c27f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
