<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f037a4a7f303c21b3d8dd1d9d69a9e42252b1ec97e52163b457a11e74c0821f extends Twig_Template
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
        $__internal_5ff25e566dbf68f1e4bc0f158ca9dbe7a589d4ae9e77f01d9dbb9ce74ef1fc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff25e566dbf68f1e4bc0f158ca9dbe7a589d4ae9e77f01d9dbb9ce74ef1fc30->enter($__internal_5ff25e566dbf68f1e4bc0f158ca9dbe7a589d4ae9e77f01d9dbb9ce74ef1fc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4c1f5457ffdd88d87baf1fb6cf8797e746c61099af8c5b1ea1ca18ff5c9b742f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1f5457ffdd88d87baf1fb6cf8797e746c61099af8c5b1ea1ca18ff5c9b742f->enter($__internal_4c1f5457ffdd88d87baf1fb6cf8797e746c61099af8c5b1ea1ca18ff5c9b742f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff25e566dbf68f1e4bc0f158ca9dbe7a589d4ae9e77f01d9dbb9ce74ef1fc30->leave($__internal_5ff25e566dbf68f1e4bc0f158ca9dbe7a589d4ae9e77f01d9dbb9ce74ef1fc30_prof);

        
        $__internal_4c1f5457ffdd88d87baf1fb6cf8797e746c61099af8c5b1ea1ca18ff5c9b742f->leave($__internal_4c1f5457ffdd88d87baf1fb6cf8797e746c61099af8c5b1ea1ca18ff5c9b742f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3da9a6695abdf56b0dfb9c6ab21d76ef2efca6770e42d050d79ef1d40a435903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da9a6695abdf56b0dfb9c6ab21d76ef2efca6770e42d050d79ef1d40a435903->enter($__internal_3da9a6695abdf56b0dfb9c6ab21d76ef2efca6770e42d050d79ef1d40a435903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_243bc8e9436f04d16b5e6e09d38d7737c5ba746d2df4cfad90ef65b78259e591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243bc8e9436f04d16b5e6e09d38d7737c5ba746d2df4cfad90ef65b78259e591->enter($__internal_243bc8e9436f04d16b5e6e09d38d7737c5ba746d2df4cfad90ef65b78259e591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_243bc8e9436f04d16b5e6e09d38d7737c5ba746d2df4cfad90ef65b78259e591->leave($__internal_243bc8e9436f04d16b5e6e09d38d7737c5ba746d2df4cfad90ef65b78259e591_prof);

        
        $__internal_3da9a6695abdf56b0dfb9c6ab21d76ef2efca6770e42d050d79ef1d40a435903->leave($__internal_3da9a6695abdf56b0dfb9c6ab21d76ef2efca6770e42d050d79ef1d40a435903_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9820437bb16ecd5ad3734b775afc962b5f73736b1e618ea0ea9166e4d7bf8f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9820437bb16ecd5ad3734b775afc962b5f73736b1e618ea0ea9166e4d7bf8f23->enter($__internal_9820437bb16ecd5ad3734b775afc962b5f73736b1e618ea0ea9166e4d7bf8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_162b727f313012fbf93f4d40a44688230cb841272f44582fe530bd471bb82395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162b727f313012fbf93f4d40a44688230cb841272f44582fe530bd471bb82395->enter($__internal_162b727f313012fbf93f4d40a44688230cb841272f44582fe530bd471bb82395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_162b727f313012fbf93f4d40a44688230cb841272f44582fe530bd471bb82395->leave($__internal_162b727f313012fbf93f4d40a44688230cb841272f44582fe530bd471bb82395_prof);

        
        $__internal_9820437bb16ecd5ad3734b775afc962b5f73736b1e618ea0ea9166e4d7bf8f23->leave($__internal_9820437bb16ecd5ad3734b775afc962b5f73736b1e618ea0ea9166e4d7bf8f23_prof);

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
