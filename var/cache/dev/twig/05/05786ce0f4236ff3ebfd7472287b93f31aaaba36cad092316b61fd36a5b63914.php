<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_09cee348e3302b9cf2855513d451e9b2b7f00c2cf5fc3c2a8b404b6d063b0f6e extends Twig_Template
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
        $__internal_0b6a656e61bc644dd65f089396c0368fa88f7e898d494564602121dc9696940f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6a656e61bc644dd65f089396c0368fa88f7e898d494564602121dc9696940f->enter($__internal_0b6a656e61bc644dd65f089396c0368fa88f7e898d494564602121dc9696940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_75d78e94b604608a2c6efb2e417c2c6de86755cd90fbd43830a32feb722b4c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d78e94b604608a2c6efb2e417c2c6de86755cd90fbd43830a32feb722b4c16->enter($__internal_75d78e94b604608a2c6efb2e417c2c6de86755cd90fbd43830a32feb722b4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0b6a656e61bc644dd65f089396c0368fa88f7e898d494564602121dc9696940f->leave($__internal_0b6a656e61bc644dd65f089396c0368fa88f7e898d494564602121dc9696940f_prof);

        
        $__internal_75d78e94b604608a2c6efb2e417c2c6de86755cd90fbd43830a32feb722b4c16->leave($__internal_75d78e94b604608a2c6efb2e417c2c6de86755cd90fbd43830a32feb722b4c16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
