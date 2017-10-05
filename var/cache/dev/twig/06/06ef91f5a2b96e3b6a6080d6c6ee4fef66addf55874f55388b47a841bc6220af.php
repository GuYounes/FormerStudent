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
        $__internal_2f1122682f3e850a5af168dd2b69fcc17af49fb8340de412d45690792447a32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1122682f3e850a5af168dd2b69fcc17af49fb8340de412d45690792447a32e->enter($__internal_2f1122682f3e850a5af168dd2b69fcc17af49fb8340de412d45690792447a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a4d5933f9cb77be44a0293247bdaa0486d5bac26c59ce1c330ed9775c43116e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d5933f9cb77be44a0293247bdaa0486d5bac26c59ce1c330ed9775c43116e3->enter($__internal_a4d5933f9cb77be44a0293247bdaa0486d5bac26c59ce1c330ed9775c43116e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_2f1122682f3e850a5af168dd2b69fcc17af49fb8340de412d45690792447a32e->leave($__internal_2f1122682f3e850a5af168dd2b69fcc17af49fb8340de412d45690792447a32e_prof);

        
        $__internal_a4d5933f9cb77be44a0293247bdaa0486d5bac26c59ce1c330ed9775c43116e3->leave($__internal_a4d5933f9cb77be44a0293247bdaa0486d5bac26c59ce1c330ed9775c43116e3_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
