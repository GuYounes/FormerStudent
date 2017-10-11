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
        $__internal_90e893e5e5566031777f5e81785f19479b836beecd1e0afbfa45c65a4ab507fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e893e5e5566031777f5e81785f19479b836beecd1e0afbfa45c65a4ab507fd->enter($__internal_90e893e5e5566031777f5e81785f19479b836beecd1e0afbfa45c65a4ab507fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_06a778f2ce823bf3d522eaab6959cc0b913a4604c8f65a73847f1a20ba78a287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a778f2ce823bf3d522eaab6959cc0b913a4604c8f65a73847f1a20ba78a287->enter($__internal_06a778f2ce823bf3d522eaab6959cc0b913a4604c8f65a73847f1a20ba78a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_90e893e5e5566031777f5e81785f19479b836beecd1e0afbfa45c65a4ab507fd->leave($__internal_90e893e5e5566031777f5e81785f19479b836beecd1e0afbfa45c65a4ab507fd_prof);

        
        $__internal_06a778f2ce823bf3d522eaab6959cc0b913a4604c8f65a73847f1a20ba78a287->leave($__internal_06a778f2ce823bf3d522eaab6959cc0b913a4604c8f65a73847f1a20ba78a287_prof);

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
