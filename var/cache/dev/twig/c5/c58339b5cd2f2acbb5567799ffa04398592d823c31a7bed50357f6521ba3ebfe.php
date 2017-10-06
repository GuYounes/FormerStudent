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
        $__internal_b392442407032fc1801b956396431e5809eb8a2abcde6524980a2a127f1f040e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b392442407032fc1801b956396431e5809eb8a2abcde6524980a2a127f1f040e->enter($__internal_b392442407032fc1801b956396431e5809eb8a2abcde6524980a2a127f1f040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b5a8e43efdc17d50a8d87a2da25020de3832c8e1d458e0471e0c4d6f099777f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a8e43efdc17d50a8d87a2da25020de3832c8e1d458e0471e0c4d6f099777f4->enter($__internal_b5a8e43efdc17d50a8d87a2da25020de3832c8e1d458e0471e0c4d6f099777f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b392442407032fc1801b956396431e5809eb8a2abcde6524980a2a127f1f040e->leave($__internal_b392442407032fc1801b956396431e5809eb8a2abcde6524980a2a127f1f040e_prof);

        
        $__internal_b5a8e43efdc17d50a8d87a2da25020de3832c8e1d458e0471e0c4d6f099777f4->leave($__internal_b5a8e43efdc17d50a8d87a2da25020de3832c8e1d458e0471e0c4d6f099777f4_prof);

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
