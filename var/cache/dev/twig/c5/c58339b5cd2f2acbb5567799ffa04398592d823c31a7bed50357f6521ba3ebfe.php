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
        $__internal_46fdcc1cd6cd567ed2f760c425892eaf5ffe1c0b454043c29690556af68ecb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fdcc1cd6cd567ed2f760c425892eaf5ffe1c0b454043c29690556af68ecb1b->enter($__internal_46fdcc1cd6cd567ed2f760c425892eaf5ffe1c0b454043c29690556af68ecb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_659bd3cedb8697395fa84294b8bb01471c691feba7cc0d9674affda4b428bd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659bd3cedb8697395fa84294b8bb01471c691feba7cc0d9674affda4b428bd3d->enter($__internal_659bd3cedb8697395fa84294b8bb01471c691feba7cc0d9674affda4b428bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_46fdcc1cd6cd567ed2f760c425892eaf5ffe1c0b454043c29690556af68ecb1b->leave($__internal_46fdcc1cd6cd567ed2f760c425892eaf5ffe1c0b454043c29690556af68ecb1b_prof);

        
        $__internal_659bd3cedb8697395fa84294b8bb01471c691feba7cc0d9674affda4b428bd3d->leave($__internal_659bd3cedb8697395fa84294b8bb01471c691feba7cc0d9674affda4b428bd3d_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
