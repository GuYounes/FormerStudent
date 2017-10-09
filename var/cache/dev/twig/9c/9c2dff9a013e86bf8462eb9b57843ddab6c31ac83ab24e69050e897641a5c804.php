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
        $__internal_85f525335672e49fa63f9dff1851c63f975a5ef659efda9d340f26726ea04974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f525335672e49fa63f9dff1851c63f975a5ef659efda9d340f26726ea04974->enter($__internal_85f525335672e49fa63f9dff1851c63f975a5ef659efda9d340f26726ea04974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ae56cc071a4272066bd4ea7d1ee4d9842d2759d5370f6e2a9a922dcb2867ae44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae56cc071a4272066bd4ea7d1ee4d9842d2759d5370f6e2a9a922dcb2867ae44->enter($__internal_ae56cc071a4272066bd4ea7d1ee4d9842d2759d5370f6e2a9a922dcb2867ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85f525335672e49fa63f9dff1851c63f975a5ef659efda9d340f26726ea04974->leave($__internal_85f525335672e49fa63f9dff1851c63f975a5ef659efda9d340f26726ea04974_prof);

        
        $__internal_ae56cc071a4272066bd4ea7d1ee4d9842d2759d5370f6e2a9a922dcb2867ae44->leave($__internal_ae56cc071a4272066bd4ea7d1ee4d9842d2759d5370f6e2a9a922dcb2867ae44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e461072fc48bceab4b138302f83a3c0a557a0cae7a04f96ababe685df1f2176c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e461072fc48bceab4b138302f83a3c0a557a0cae7a04f96ababe685df1f2176c->enter($__internal_e461072fc48bceab4b138302f83a3c0a557a0cae7a04f96ababe685df1f2176c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4169721384680b0002cbdfdc3d95ab82c5159f52f2dd28ae732fcac96e826a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4169721384680b0002cbdfdc3d95ab82c5159f52f2dd28ae732fcac96e826a44->enter($__internal_4169721384680b0002cbdfdc3d95ab82c5159f52f2dd28ae732fcac96e826a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4169721384680b0002cbdfdc3d95ab82c5159f52f2dd28ae732fcac96e826a44->leave($__internal_4169721384680b0002cbdfdc3d95ab82c5159f52f2dd28ae732fcac96e826a44_prof);

        
        $__internal_e461072fc48bceab4b138302f83a3c0a557a0cae7a04f96ababe685df1f2176c->leave($__internal_e461072fc48bceab4b138302f83a3c0a557a0cae7a04f96ababe685df1f2176c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f6652857d4ec4a1fe67cad0ec2eb4d75a9bb52e420bf05f98661a5bd8a2c12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6652857d4ec4a1fe67cad0ec2eb4d75a9bb52e420bf05f98661a5bd8a2c12e->enter($__internal_4f6652857d4ec4a1fe67cad0ec2eb4d75a9bb52e420bf05f98661a5bd8a2c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee1f62bb58a42bc8f7a02cf5c53a9881d3607bd5be48daa69ea4d238195d94c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1f62bb58a42bc8f7a02cf5c53a9881d3607bd5be48daa69ea4d238195d94c2->enter($__internal_ee1f62bb58a42bc8f7a02cf5c53a9881d3607bd5be48daa69ea4d238195d94c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee1f62bb58a42bc8f7a02cf5c53a9881d3607bd5be48daa69ea4d238195d94c2->leave($__internal_ee1f62bb58a42bc8f7a02cf5c53a9881d3607bd5be48daa69ea4d238195d94c2_prof);

        
        $__internal_4f6652857d4ec4a1fe67cad0ec2eb4d75a9bb52e420bf05f98661a5bd8a2c12e->leave($__internal_4f6652857d4ec4a1fe67cad0ec2eb4d75a9bb52e420bf05f98661a5bd8a2c12e_prof);

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
