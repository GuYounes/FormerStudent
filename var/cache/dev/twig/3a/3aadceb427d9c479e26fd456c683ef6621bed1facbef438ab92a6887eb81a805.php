<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_20f23f29e1195775636e6da9569a532c2d9298fa45bc097159b0f8ae6b0ff437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_bba395d9417f2804abed8adfb2f170bd8d1db275b68216b40f561826e2d65089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba395d9417f2804abed8adfb2f170bd8d1db275b68216b40f561826e2d65089->enter($__internal_bba395d9417f2804abed8adfb2f170bd8d1db275b68216b40f561826e2d65089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_82f6de55ba8da2732700e1f9dada243992699a64e7b8c10c47398f2fba64189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f6de55ba8da2732700e1f9dada243992699a64e7b8c10c47398f2fba64189a->enter($__internal_82f6de55ba8da2732700e1f9dada243992699a64e7b8c10c47398f2fba64189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba395d9417f2804abed8adfb2f170bd8d1db275b68216b40f561826e2d65089->leave($__internal_bba395d9417f2804abed8adfb2f170bd8d1db275b68216b40f561826e2d65089_prof);

        
        $__internal_82f6de55ba8da2732700e1f9dada243992699a64e7b8c10c47398f2fba64189a->leave($__internal_82f6de55ba8da2732700e1f9dada243992699a64e7b8c10c47398f2fba64189a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a9c68331357656f1b6289fb5060c89a332e05f51cd7103a78c3d5434aa2f741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9c68331357656f1b6289fb5060c89a332e05f51cd7103a78c3d5434aa2f741->enter($__internal_7a9c68331357656f1b6289fb5060c89a332e05f51cd7103a78c3d5434aa2f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_109a4c6dec7e426f22f7c964df4e67c124c24efb1e3e29727b36a0c9e82fdba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109a4c6dec7e426f22f7c964df4e67c124c24efb1e3e29727b36a0c9e82fdba0->enter($__internal_109a4c6dec7e426f22f7c964df4e67c124c24efb1e3e29727b36a0c9e82fdba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_109a4c6dec7e426f22f7c964df4e67c124c24efb1e3e29727b36a0c9e82fdba0->leave($__internal_109a4c6dec7e426f22f7c964df4e67c124c24efb1e3e29727b36a0c9e82fdba0_prof);

        
        $__internal_7a9c68331357656f1b6289fb5060c89a332e05f51cd7103a78c3d5434aa2f741->leave($__internal_7a9c68331357656f1b6289fb5060c89a332e05f51cd7103a78c3d5434aa2f741_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c75007525c6e8324225d024206e85a5a03118d63bfdd9a8ff2e19bbdf3a0dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c75007525c6e8324225d024206e85a5a03118d63bfdd9a8ff2e19bbdf3a0dc0->enter($__internal_4c75007525c6e8324225d024206e85a5a03118d63bfdd9a8ff2e19bbdf3a0dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c95ffc64df48a0a53acd9b22eef5f871cfdbc70f8665cb1d56e71f6cca9bc3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95ffc64df48a0a53acd9b22eef5f871cfdbc70f8665cb1d56e71f6cca9bc3d6->enter($__internal_c95ffc64df48a0a53acd9b22eef5f871cfdbc70f8665cb1d56e71f6cca9bc3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c95ffc64df48a0a53acd9b22eef5f871cfdbc70f8665cb1d56e71f6cca9bc3d6->leave($__internal_c95ffc64df48a0a53acd9b22eef5f871cfdbc70f8665cb1d56e71f6cca9bc3d6_prof);

        
        $__internal_4c75007525c6e8324225d024206e85a5a03118d63bfdd9a8ff2e19bbdf3a0dc0->leave($__internal_4c75007525c6e8324225d024206e85a5a03118d63bfdd9a8ff2e19bbdf3a0dc0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
