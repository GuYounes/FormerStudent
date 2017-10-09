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
        $__internal_9660ad7c8d6b9456700ca3690504e59891c6cfe12401cdb5ee74b07de9f65702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9660ad7c8d6b9456700ca3690504e59891c6cfe12401cdb5ee74b07de9f65702->enter($__internal_9660ad7c8d6b9456700ca3690504e59891c6cfe12401cdb5ee74b07de9f65702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_348178a8281688d55ffbb3b00d8e4f6341082c5a9d37a5c28f6bc2364becffc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348178a8281688d55ffbb3b00d8e4f6341082c5a9d37a5c28f6bc2364becffc4->enter($__internal_348178a8281688d55ffbb3b00d8e4f6341082c5a9d37a5c28f6bc2364becffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9660ad7c8d6b9456700ca3690504e59891c6cfe12401cdb5ee74b07de9f65702->leave($__internal_9660ad7c8d6b9456700ca3690504e59891c6cfe12401cdb5ee74b07de9f65702_prof);

        
        $__internal_348178a8281688d55ffbb3b00d8e4f6341082c5a9d37a5c28f6bc2364becffc4->leave($__internal_348178a8281688d55ffbb3b00d8e4f6341082c5a9d37a5c28f6bc2364becffc4_prof);

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
