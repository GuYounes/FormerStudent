<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13efe0c3c28f888259847f8b248d49e3287de2dc4db04dde9ef8faf062b38904 extends Twig_Template
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
        $__internal_003d37e69440a43e73c98bd556cd253de5d973960b1c97b293d140d1a50317c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003d37e69440a43e73c98bd556cd253de5d973960b1c97b293d140d1a50317c9->enter($__internal_003d37e69440a43e73c98bd556cd253de5d973960b1c97b293d140d1a50317c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7ec4f04ee8a02c26191cb19fce84c6647bb65cdaa0d17158c8a34851f206eed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec4f04ee8a02c26191cb19fce84c6647bb65cdaa0d17158c8a34851f206eed5->enter($__internal_7ec4f04ee8a02c26191cb19fce84c6647bb65cdaa0d17158c8a34851f206eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_003d37e69440a43e73c98bd556cd253de5d973960b1c97b293d140d1a50317c9->leave($__internal_003d37e69440a43e73c98bd556cd253de5d973960b1c97b293d140d1a50317c9_prof);

        
        $__internal_7ec4f04ee8a02c26191cb19fce84c6647bb65cdaa0d17158c8a34851f206eed5->leave($__internal_7ec4f04ee8a02c26191cb19fce84c6647bb65cdaa0d17158c8a34851f206eed5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
