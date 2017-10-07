<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97ac3e2457da1f03a14fc71ece1e538546be990d7d2a9329467b1bff51e8a758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97415c964930adc266e2423d5ba5305255cf9603afdb915783f6f752e654c9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97415c964930adc266e2423d5ba5305255cf9603afdb915783f6f752e654c9e7->enter($__internal_97415c964930adc266e2423d5ba5305255cf9603afdb915783f6f752e654c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0fbc24b23e95c9081fe5ea7de28256e485f9874ec35caa9fca4184d8979ae249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbc24b23e95c9081fe5ea7de28256e485f9874ec35caa9fca4184d8979ae249->enter($__internal_0fbc24b23e95c9081fe5ea7de28256e485f9874ec35caa9fca4184d8979ae249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97415c964930adc266e2423d5ba5305255cf9603afdb915783f6f752e654c9e7->leave($__internal_97415c964930adc266e2423d5ba5305255cf9603afdb915783f6f752e654c9e7_prof);

        
        $__internal_0fbc24b23e95c9081fe5ea7de28256e485f9874ec35caa9fca4184d8979ae249->leave($__internal_0fbc24b23e95c9081fe5ea7de28256e485f9874ec35caa9fca4184d8979ae249_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0393c85732a6614d5a786b8f6eb0de62251ba5e951c88f5e326f181d66e7baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0393c85732a6614d5a786b8f6eb0de62251ba5e951c88f5e326f181d66e7baf->enter($__internal_c0393c85732a6614d5a786b8f6eb0de62251ba5e951c88f5e326f181d66e7baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_caba086853a0076ee5c9aef05d06d08c0833fd84a07311a7b0aca0505cd41071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caba086853a0076ee5c9aef05d06d08c0833fd84a07311a7b0aca0505cd41071->enter($__internal_caba086853a0076ee5c9aef05d06d08c0833fd84a07311a7b0aca0505cd41071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_caba086853a0076ee5c9aef05d06d08c0833fd84a07311a7b0aca0505cd41071->leave($__internal_caba086853a0076ee5c9aef05d06d08c0833fd84a07311a7b0aca0505cd41071_prof);

        
        $__internal_c0393c85732a6614d5a786b8f6eb0de62251ba5e951c88f5e326f181d66e7baf->leave($__internal_c0393c85732a6614d5a786b8f6eb0de62251ba5e951c88f5e326f181d66e7baf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88776ba8ec5fc95d6543f4bd8eae64be9349fe9f6b4815f8d42b9e042510430f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88776ba8ec5fc95d6543f4bd8eae64be9349fe9f6b4815f8d42b9e042510430f->enter($__internal_88776ba8ec5fc95d6543f4bd8eae64be9349fe9f6b4815f8d42b9e042510430f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2612c7c39efc916f935a4c39b7e176fdbda87a9ef84f852ddc90be77484d80b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2612c7c39efc916f935a4c39b7e176fdbda87a9ef84f852ddc90be77484d80b8->enter($__internal_2612c7c39efc916f935a4c39b7e176fdbda87a9ef84f852ddc90be77484d80b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2612c7c39efc916f935a4c39b7e176fdbda87a9ef84f852ddc90be77484d80b8->leave($__internal_2612c7c39efc916f935a4c39b7e176fdbda87a9ef84f852ddc90be77484d80b8_prof);

        
        $__internal_88776ba8ec5fc95d6543f4bd8eae64be9349fe9f6b4815f8d42b9e042510430f->leave($__internal_88776ba8ec5fc95d6543f4bd8eae64be9349fe9f6b4815f8d42b9e042510430f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
