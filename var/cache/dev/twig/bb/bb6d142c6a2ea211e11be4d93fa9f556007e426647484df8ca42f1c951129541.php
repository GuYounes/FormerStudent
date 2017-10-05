<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_39a323f7a6efce9f70a5280054154e7ee846ac31e7ead962ccb794135747a8c9 extends Twig_Template
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
        $__internal_20bd5b85f49f61b94ed8cf372ab0143ff0892b89c00613d3888b43545afe0774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bd5b85f49f61b94ed8cf372ab0143ff0892b89c00613d3888b43545afe0774->enter($__internal_20bd5b85f49f61b94ed8cf372ab0143ff0892b89c00613d3888b43545afe0774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5dcd6a10734df3438bca2aa6c53522d37b6640ffb6e202ea47c41e67ddff11b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd6a10734df3438bca2aa6c53522d37b6640ffb6e202ea47c41e67ddff11b8->enter($__internal_5dcd6a10734df3438bca2aa6c53522d37b6640ffb6e202ea47c41e67ddff11b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_20bd5b85f49f61b94ed8cf372ab0143ff0892b89c00613d3888b43545afe0774->leave($__internal_20bd5b85f49f61b94ed8cf372ab0143ff0892b89c00613d3888b43545afe0774_prof);

        
        $__internal_5dcd6a10734df3438bca2aa6c53522d37b6640ffb6e202ea47c41e67ddff11b8->leave($__internal_5dcd6a10734df3438bca2aa6c53522d37b6640ffb6e202ea47c41e67ddff11b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
