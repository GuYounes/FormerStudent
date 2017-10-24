<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dec1cc0ac201dfe96970ca5002be77745fed6335ce09a57bbdd75ecb0eb78a13 extends Twig_Template
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
        $__internal_6644a4ffd31247bebcb7a67da2f5b168ec156784f76bc393c2a983e8bbf1186b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6644a4ffd31247bebcb7a67da2f5b168ec156784f76bc393c2a983e8bbf1186b->enter($__internal_6644a4ffd31247bebcb7a67da2f5b168ec156784f76bc393c2a983e8bbf1186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f290b46ec21f772e0fccf558f1143ab3b0626f1d58c67568aca28c013b44b807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f290b46ec21f772e0fccf558f1143ab3b0626f1d58c67568aca28c013b44b807->enter($__internal_f290b46ec21f772e0fccf558f1143ab3b0626f1d58c67568aca28c013b44b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6644a4ffd31247bebcb7a67da2f5b168ec156784f76bc393c2a983e8bbf1186b->leave($__internal_6644a4ffd31247bebcb7a67da2f5b168ec156784f76bc393c2a983e8bbf1186b_prof);

        
        $__internal_f290b46ec21f772e0fccf558f1143ab3b0626f1d58c67568aca28c013b44b807->leave($__internal_f290b46ec21f772e0fccf558f1143ab3b0626f1d58c67568aca28c013b44b807_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4701b30d963793f21b8a835e3a99e2de0f5a64c185018c581bcb537dbc7c406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4701b30d963793f21b8a835e3a99e2de0f5a64c185018c581bcb537dbc7c406->enter($__internal_a4701b30d963793f21b8a835e3a99e2de0f5a64c185018c581bcb537dbc7c406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77a97cec7ecb6856bf1ed3a0088f848a98d9192dfbcc76b69a6b8d8b42e985fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a97cec7ecb6856bf1ed3a0088f848a98d9192dfbcc76b69a6b8d8b42e985fc->enter($__internal_77a97cec7ecb6856bf1ed3a0088f848a98d9192dfbcc76b69a6b8d8b42e985fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77a97cec7ecb6856bf1ed3a0088f848a98d9192dfbcc76b69a6b8d8b42e985fc->leave($__internal_77a97cec7ecb6856bf1ed3a0088f848a98d9192dfbcc76b69a6b8d8b42e985fc_prof);

        
        $__internal_a4701b30d963793f21b8a835e3a99e2de0f5a64c185018c581bcb537dbc7c406->leave($__internal_a4701b30d963793f21b8a835e3a99e2de0f5a64c185018c581bcb537dbc7c406_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02731258025661ca901b685544bf8cde4e8737eb4609d3c58b69203b4f432524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02731258025661ca901b685544bf8cde4e8737eb4609d3c58b69203b4f432524->enter($__internal_02731258025661ca901b685544bf8cde4e8737eb4609d3c58b69203b4f432524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13783dcd3d66c19b9ba841b5f79f9e9f39caa676f4a20bdd4fb7ad619c306d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13783dcd3d66c19b9ba841b5f79f9e9f39caa676f4a20bdd4fb7ad619c306d7f->enter($__internal_13783dcd3d66c19b9ba841b5f79f9e9f39caa676f4a20bdd4fb7ad619c306d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13783dcd3d66c19b9ba841b5f79f9e9f39caa676f4a20bdd4fb7ad619c306d7f->leave($__internal_13783dcd3d66c19b9ba841b5f79f9e9f39caa676f4a20bdd4fb7ad619c306d7f_prof);

        
        $__internal_02731258025661ca901b685544bf8cde4e8737eb4609d3c58b69203b4f432524->leave($__internal_02731258025661ca901b685544bf8cde4e8737eb4609d3c58b69203b4f432524_prof);

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
