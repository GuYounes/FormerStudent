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
        $__internal_d69175bce48773eec08228c74cf605fc21bb9ef7440e4848a43e717a8ffc1b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69175bce48773eec08228c74cf605fc21bb9ef7440e4848a43e717a8ffc1b4b->enter($__internal_d69175bce48773eec08228c74cf605fc21bb9ef7440e4848a43e717a8ffc1b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_820930430a0b3312f171a8cd1c3a4b6c23c75e40d38e33ef39d7c6b9ee88b484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820930430a0b3312f171a8cd1c3a4b6c23c75e40d38e33ef39d7c6b9ee88b484->enter($__internal_820930430a0b3312f171a8cd1c3a4b6c23c75e40d38e33ef39d7c6b9ee88b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d69175bce48773eec08228c74cf605fc21bb9ef7440e4848a43e717a8ffc1b4b->leave($__internal_d69175bce48773eec08228c74cf605fc21bb9ef7440e4848a43e717a8ffc1b4b_prof);

        
        $__internal_820930430a0b3312f171a8cd1c3a4b6c23c75e40d38e33ef39d7c6b9ee88b484->leave($__internal_820930430a0b3312f171a8cd1c3a4b6c23c75e40d38e33ef39d7c6b9ee88b484_prof);

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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
