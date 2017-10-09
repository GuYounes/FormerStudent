<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_55ce3060c789ec2fc02ccb088e199c4c0a4c717f5fb52054d6292145fdb3c57a extends Twig_Template
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
        $__internal_a14c2767a33719465d313d63bca016c1722ffe3b04e975c1a15191836113ae4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14c2767a33719465d313d63bca016c1722ffe3b04e975c1a15191836113ae4b->enter($__internal_a14c2767a33719465d313d63bca016c1722ffe3b04e975c1a15191836113ae4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_beb95714b23a5d1ef13c1764f8b3d3311e1d7a2bd2128378311007dae0d5809d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb95714b23a5d1ef13c1764f8b3d3311e1d7a2bd2128378311007dae0d5809d->enter($__internal_beb95714b23a5d1ef13c1764f8b3d3311e1d7a2bd2128378311007dae0d5809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a14c2767a33719465d313d63bca016c1722ffe3b04e975c1a15191836113ae4b->leave($__internal_a14c2767a33719465d313d63bca016c1722ffe3b04e975c1a15191836113ae4b_prof);

        
        $__internal_beb95714b23a5d1ef13c1764f8b3d3311e1d7a2bd2128378311007dae0d5809d->leave($__internal_beb95714b23a5d1ef13c1764f8b3d3311e1d7a2bd2128378311007dae0d5809d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
