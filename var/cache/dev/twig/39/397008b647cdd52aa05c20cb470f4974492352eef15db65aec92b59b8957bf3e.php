<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_338c17e30cf39b9a3fa89a5a6c52b8f058937e14c4d5b91462fe7744d668ad34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d15c0c056141af6400b9dc1797f3f2c95a49aad50c0a246388fe6dccacd3f9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15c0c056141af6400b9dc1797f3f2c95a49aad50c0a246388fe6dccacd3f9fc->enter($__internal_d15c0c056141af6400b9dc1797f3f2c95a49aad50c0a246388fe6dccacd3f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d5e83c33539182d076c7af76faaa613eccb1203007c64adcb320ec8918cab98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e83c33539182d076c7af76faaa613eccb1203007c64adcb320ec8918cab98d->enter($__internal_d5e83c33539182d076c7af76faaa613eccb1203007c64adcb320ec8918cab98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15c0c056141af6400b9dc1797f3f2c95a49aad50c0a246388fe6dccacd3f9fc->leave($__internal_d15c0c056141af6400b9dc1797f3f2c95a49aad50c0a246388fe6dccacd3f9fc_prof);

        
        $__internal_d5e83c33539182d076c7af76faaa613eccb1203007c64adcb320ec8918cab98d->leave($__internal_d5e83c33539182d076c7af76faaa613eccb1203007c64adcb320ec8918cab98d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d858fbbe054e21ecbc4d20225bf05abcb7346457b31d2e3b9e9fb4d367d7d5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d858fbbe054e21ecbc4d20225bf05abcb7346457b31d2e3b9e9fb4d367d7d5a5->enter($__internal_d858fbbe054e21ecbc4d20225bf05abcb7346457b31d2e3b9e9fb4d367d7d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30be1f30052c25035aa9ec0b8a6cda88d611682dfb7bad87ddbcfcdbe9595e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30be1f30052c25035aa9ec0b8a6cda88d611682dfb7bad87ddbcfcdbe9595e9b->enter($__internal_30be1f30052c25035aa9ec0b8a6cda88d611682dfb7bad87ddbcfcdbe9595e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_30be1f30052c25035aa9ec0b8a6cda88d611682dfb7bad87ddbcfcdbe9595e9b->leave($__internal_30be1f30052c25035aa9ec0b8a6cda88d611682dfb7bad87ddbcfcdbe9595e9b_prof);

        
        $__internal_d858fbbe054e21ecbc4d20225bf05abcb7346457b31d2e3b9e9fb4d367d7d5a5->leave($__internal_d858fbbe054e21ecbc4d20225bf05abcb7346457b31d2e3b9e9fb4d367d7d5a5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_81a70f24ec297e4460709ad0e33219010003cfeb8e4bab222a5c69a946d2338c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a70f24ec297e4460709ad0e33219010003cfeb8e4bab222a5c69a946d2338c->enter($__internal_81a70f24ec297e4460709ad0e33219010003cfeb8e4bab222a5c69a946d2338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a0add88d08b6933dc53c5bc9b052b5af58b314ad727869c235f501f39e3b89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0add88d08b6933dc53c5bc9b052b5af58b314ad727869c235f501f39e3b89c->enter($__internal_3a0add88d08b6933dc53c5bc9b052b5af58b314ad727869c235f501f39e3b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_3a0add88d08b6933dc53c5bc9b052b5af58b314ad727869c235f501f39e3b89c->leave($__internal_3a0add88d08b6933dc53c5bc9b052b5af58b314ad727869c235f501f39e3b89c_prof);

        
        $__internal_81a70f24ec297e4460709ad0e33219010003cfeb8e4bab222a5c69a946d2338c->leave($__internal_81a70f24ec297e4460709ad0e33219010003cfeb8e4bab222a5c69a946d2338c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
