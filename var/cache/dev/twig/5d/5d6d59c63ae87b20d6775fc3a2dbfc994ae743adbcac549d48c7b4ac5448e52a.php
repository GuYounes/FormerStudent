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
        $__internal_6c32938693f8a1a9d96b2756c640148f72f100c6187edd88cc9be2c93a8eefe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c32938693f8a1a9d96b2756c640148f72f100c6187edd88cc9be2c93a8eefe2->enter($__internal_6c32938693f8a1a9d96b2756c640148f72f100c6187edd88cc9be2c93a8eefe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_831137c2d4e001f133c24f048915f2c30e6fad78d3245862c1cfb5f7db0b193a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831137c2d4e001f133c24f048915f2c30e6fad78d3245862c1cfb5f7db0b193a->enter($__internal_831137c2d4e001f133c24f048915f2c30e6fad78d3245862c1cfb5f7db0b193a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6c32938693f8a1a9d96b2756c640148f72f100c6187edd88cc9be2c93a8eefe2->leave($__internal_6c32938693f8a1a9d96b2756c640148f72f100c6187edd88cc9be2c93a8eefe2_prof);

        
        $__internal_831137c2d4e001f133c24f048915f2c30e6fad78d3245862c1cfb5f7db0b193a->leave($__internal_831137c2d4e001f133c24f048915f2c30e6fad78d3245862c1cfb5f7db0b193a_prof);

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
