<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_81970fb0ffc50379efcfbb6b179de72aa6a960e69b471f55158873c4f7ac5dfb extends Twig_Template
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
        $__internal_5498fd1cf711e0d8eb3debc59b3377f52c33ca7d7fb38818db4d43ad637fe938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5498fd1cf711e0d8eb3debc59b3377f52c33ca7d7fb38818db4d43ad637fe938->enter($__internal_5498fd1cf711e0d8eb3debc59b3377f52c33ca7d7fb38818db4d43ad637fe938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_af0244c558b7faee9bb198d8eb82b931eb74ccee163a4cf32b94b5fc3e51bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0244c558b7faee9bb198d8eb82b931eb74ccee163a4cf32b94b5fc3e51bf65->enter($__internal_af0244c558b7faee9bb198d8eb82b931eb74ccee163a4cf32b94b5fc3e51bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5498fd1cf711e0d8eb3debc59b3377f52c33ca7d7fb38818db4d43ad637fe938->leave($__internal_5498fd1cf711e0d8eb3debc59b3377f52c33ca7d7fb38818db4d43ad637fe938_prof);

        
        $__internal_af0244c558b7faee9bb198d8eb82b931eb74ccee163a4cf32b94b5fc3e51bf65->leave($__internal_af0244c558b7faee9bb198d8eb82b931eb74ccee163a4cf32b94b5fc3e51bf65_prof);

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
