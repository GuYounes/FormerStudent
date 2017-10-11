<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_bf9490fb34010cf552a55d6263a59c54b8827746f85736f6eb31c9a3890f3c60 extends Twig_Template
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
        $__internal_f809904670a074791e9b46541a30638db559c6b3d769a2ea8ca9cbdb12f8e30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f809904670a074791e9b46541a30638db559c6b3d769a2ea8ca9cbdb12f8e30f->enter($__internal_f809904670a074791e9b46541a30638db559c6b3d769a2ea8ca9cbdb12f8e30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c144bb59a8a8b0921d0410b6be8c95a0c40a8f95a942892fb03cc93629a6acea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c144bb59a8a8b0921d0410b6be8c95a0c40a8f95a942892fb03cc93629a6acea->enter($__internal_c144bb59a8a8b0921d0410b6be8c95a0c40a8f95a942892fb03cc93629a6acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f809904670a074791e9b46541a30638db559c6b3d769a2ea8ca9cbdb12f8e30f->leave($__internal_f809904670a074791e9b46541a30638db559c6b3d769a2ea8ca9cbdb12f8e30f_prof);

        
        $__internal_c144bb59a8a8b0921d0410b6be8c95a0c40a8f95a942892fb03cc93629a6acea->leave($__internal_c144bb59a8a8b0921d0410b6be8c95a0c40a8f95a942892fb03cc93629a6acea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
