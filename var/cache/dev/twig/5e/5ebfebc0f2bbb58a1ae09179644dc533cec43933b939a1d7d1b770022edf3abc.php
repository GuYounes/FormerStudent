<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_935e157c55e7f9cad102e1e9e068528062a903d11b5867d06710bd1bc5941a6d extends Twig_Template
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
        $__internal_1e70df565108676e0e71499178f9b753bb40104b25229c28a1ad2d25b3932205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e70df565108676e0e71499178f9b753bb40104b25229c28a1ad2d25b3932205->enter($__internal_1e70df565108676e0e71499178f9b753bb40104b25229c28a1ad2d25b3932205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3f983df931300e0651ef7451096953c6150fc4f7c331586aa8bd4afa68183c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f983df931300e0651ef7451096953c6150fc4f7c331586aa8bd4afa68183c5c->enter($__internal_3f983df931300e0651ef7451096953c6150fc4f7c331586aa8bd4afa68183c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1e70df565108676e0e71499178f9b753bb40104b25229c28a1ad2d25b3932205->leave($__internal_1e70df565108676e0e71499178f9b753bb40104b25229c28a1ad2d25b3932205_prof);

        
        $__internal_3f983df931300e0651ef7451096953c6150fc4f7c331586aa8bd4afa68183c5c->leave($__internal_3f983df931300e0651ef7451096953c6150fc4f7c331586aa8bd4afa68183c5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
